<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_obat extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id_obat' => array(
                            'type' => 'INT',
                            'constraint' => 5,
                            'unsigned' => TRUE,
                            'auto_increment' => TRUE
                        ),
                        'id_jenis_obat' => array(
                            'type' => 'INT',
                            'unsigned' => TRUE,
                            'constraint' => 5
                        ),
                        'nama_obat' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'satuan' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'harga' => array(
                                'type' => 'INT',
                                'constraint' => '11',
                        ),
                        'stok' => array(
                                'type' => 'INT',
                                'constraint' => '5',
                        ),
                        'expired' => array(
                            'type' => 'DATE'
                        )
                ));
                $this->dbforge->add_key('id_obat', TRUE);
                $this->dbforge->add_key('id_jenis_obat');

                $this->dbforge->create_table('obat');
                
                $this->db->query('ALTER TABLE `obat` ADD FOREIGN KEY(`id_jenis_obat`) REFERENCES `jenis_obat`(`id_jenis_obat`) ON DELETE CASCADE ON UPDATE CASCADE;');
        }

        public function down()
        {
                $this->dbforge->drop_table('obat');
        }
}