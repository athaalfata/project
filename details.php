<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Blog module
 *
 * @author  Widianto dan Hendri
 */
class Module_Project extends Module
{
	public $version = '1.0.0';

	//informasi tentang modul project

	public function info()
	{
		return array(
			'name' => array(
				'en' => 'Project',
			),
			'description' => array(
				'en' => 'Post Project entries.',
			),
			'frontend' => true,
			'backend' => true,
			'skip_xss' => true,
			'menu' => 'content',

			'roles' => array(
				'put_publish', 'edit_publish'
			),

			'sections' => array(
				'projects' => array(
					'name' => 'Projects',
					'uri' => 'admin/project',
					'shortcuts' => array(
						array(
							'name' => 'create project',
							'uri' => 'admin/project/create',
						),
					),
				),
				'categories' => array(
					'name' => 'Category',
					'uri' => 'admin/project/categories',
					'shortcuts' => array(
						array(
							'name' => 'create category',
							'uri' => 'admin/project/categories/create',
						),
					),
				),
			),
		);
	}

	//fungsi yang dipanggil ketika instalasi modul

	public function install()
	{
		$this->dbforge->drop_table('ipro_project_categories');
		$this->dbforge->drop_table('ipro_project');
		$this->dbforge->drop_table('ipro_fitur');
		$this->dbforge->drop_table('ipro_project_fitur');

		return $this->install_tables(array(
			'ipro_project_categories' => array(
				'id' => array('type' => 'INT', 'constraint' => 11, 'auto_increment' => true, 'primary' => true),
				'slug' => array('type' => 'VARCHAR', 'constraint' => 100, 'null' => false, 'unique' => true, 'key' => true),
				'title' => array('type' => 'VARCHAR', 'constraint' => 100, 'null' => false, 'unique' => true),
			),
			'ipro_project' => array(
				'id' => array('type' => 'INT', 'constraint' => 11, 'auto_increment' => true, 'primary' => true),
				'title' => array('type' => 'VARCHAR', 'constraint' => 200, 'null' => false, 'unique' => true),
				'slug' => array('type' => 'VARCHAR', 'constraint' => 200),
				'category_id' => array('type' => 'INT', 'constraint' => 11, 'key' => true),
				'attachment' => array('type' => 'VARCHAR', 'constraint' => 255, 'default' => ''),
				'body' => array('type' => 'TEXT'),
				'keywords' => array('type' => 'VARCHAR', 'constraint' => 32, 'default' => ''),
				'author_id' => array('type' => 'INT', 'constraint' => 11, 'default' => 0),
				'created_on' => array('type' => 'TIMESTAMP'),
				'updated_on' => array('type' => 'INT', 'constraint' => 11, 'default' => 0),
				'status' => array('type' => 'ENUM', 'constraint' => array('pending', 'publish','accepted','completed'), 'default' => 'pending'),
				'preview_hash' => array('type' => 'CHAR', 'constraint' => 32, 'default' => ''),
				'type' => array('type' => 'ENUM', 'constraint' => array('regular','trial','kontes')),
			),
			'ipro_fitur' => array(
				'id' => array('type' => 'INT', 'constraint' => 11, 'auto_increment' => true, 'primary' => true),
				'nama_fitur' => array('type' => 'VARCHAR', 'constraint' => 100),
				'deskripsi_fitur' => array('type' => 'TEXT'),
			),
			'ipro_project_fitur' => array(
				'id' => array('type' => 'INT', 'constraint' => 11, 'auto_increment' => true, 'primary' => true),
				'id_project' => array('type' => 'INT', 'constraint' => 11),
				'id_fitur' => array('type' => 'INT', 'constraint' => 11),
			),
		));
	}

	//fungsi yang dipanggil ketika uninstall modul

	public function uninstall()
	{
		return true;
	}

	//fungsi yang dipanggil ketika modul berubah

	public function upgrade($old_version)
	{
		return true;
	}
}
