<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_user extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id_user' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                            'auto_increment' => TRUE
                        ),
                        'username' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                        'fullname' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'is_active' => array(
                                'type' => 'TINYINT',
                                'constraint' => 1,
                        ),
                ));
                $this->dbforge->add_key('id_user', TRUE);
                $this->dbforge->create_table('user');
        }

        public function down()
        {
                $this->dbforge->drop_table('user');
        }
}