<?php
/**
 * Leaps Framework [ WE CAN DO IT JUST THINK IT ]
 * @link http://www.tintsoft.com
 * @copyright Copyright (c) 2011-2014 Leaps Team
 * @license http://www.linfo.org/bsdlicense.html
 */
use Leaps\Db\Schema;
use Leaps\Db\Migration;
class m130524_201442_init extends Migration
{

	public function up()
	{
		$tableOptions = null;
		if ($this->db->driverName === 'mysql') {
			// http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
			$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		}
		
		$this->createTable ( '{{%user}}', [ 
			'id' => $this->primaryKey (),
			'username' => $this->string ()->notNull ()->unique (),
			'email' => $this->string ()->notNull ()->unique (),
			'auth_key' => $this->string ( 32 )->notNull (),
			'password_hash' => $this->string ()->notNull (),
			'password_reset_token' => $this->string ()->unique (),
			'status' => $this->smallInteger ()->notNull ()->defaultValue ( 10 ),
			'created_at' => $this->integer ()->notNull (),
			'updated_at' => $this->integer ()->notNull () 
		], $tableOptions );
	}

	public function down()
	{
		$this->dropTable ( '{{%user}}' );
	}
}
