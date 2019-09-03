<?php
namespace kaspi\Migration;

use Kaspi\Config;
use Kaspi\Db;

class Migration implements MigrationInterface
{
    /** @var Config  */
    private $config;
    /** @var \PDO Работа с SQL как со стандартным PDO драйвером! */
    private $db;

    public function __construct(Config $config)
    {
        $this->config = $config;
        $this->db = Db::getInstance($config);
    }

    /**
     * скрипт внесения миграции
     */
    public function up(): void
    {
        // TODO: Implement up() method.
        $this->db->exec('');
    }

    /**
     * скрипт удаления миграции
     */
    public function down(): void
    {
        // TODO: Implement down() method.
    }
}