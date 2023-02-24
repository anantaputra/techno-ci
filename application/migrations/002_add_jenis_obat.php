<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_jenis_obat extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id_jenis_obat' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                            'auto_increment' => TRUE
                        ),
                        'nama_jenis_obat' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                ));
                $this->dbforge->add_key('id_jenis_obat', TRUE);
                $this->dbforge->create_table('jenis_obat');
        }

        public function down()
        {
                $this->dbforge->drop_table('jenis_obat');
        }
}