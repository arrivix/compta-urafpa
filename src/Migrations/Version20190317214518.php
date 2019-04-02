<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190317214518 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE document_file ADD create_user_id INT DEFAULT NULL, ADD modification_user_id INT DEFAULT NULL, ADD modification_date DATETIME NOT NULL, ADD create_date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE document_file ADD CONSTRAINT FK_2B2BBA8385564492 FOREIGN KEY (create_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE document_file ADD CONSTRAINT FK_2B2BBA83337A48F0 FOREIGN KEY (modification_user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_2B2BBA8385564492 ON document_file (create_user_id)');
        $this->addSql('CREATE INDEX IDX_2B2BBA83337A48F0 ON document_file (modification_user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE document_file DROP FOREIGN KEY FK_2B2BBA8385564492');
        $this->addSql('ALTER TABLE document_file DROP FOREIGN KEY FK_2B2BBA83337A48F0');
        $this->addSql('DROP INDEX IDX_2B2BBA8385564492 ON document_file');
        $this->addSql('DROP INDEX IDX_2B2BBA83337A48F0 ON document_file');
        $this->addSql('ALTER TABLE document_file DROP create_user_id, DROP modification_user_id, DROP modification_date, DROP create_date');
    }
}
