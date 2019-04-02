<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190310144945 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE document_file (id INT AUTO_INCREMENT NOT NULL, file_name VARCHAR(255) NOT NULL, date_upload DATE NOT NULL, md5 VARCHAR(32) NOT NULL, sha1 VARCHAR(40) NOT NULL, size DOUBLE PRECISION NOT NULL, version INT NOT NULL, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE doccument_file');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE doccument_file (id INT AUTO_INCREMENT NOT NULL, file_name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, date_upload DATE NOT NULL, md5 VARCHAR(32) NOT NULL COLLATE utf8mb4_unicode_ci, sha1 VARCHAR(40) NOT NULL COLLATE utf8mb4_unicode_ci, size DOUBLE PRECISION NOT NULL, version INT NOT NULL, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE document_file');
    }
}
