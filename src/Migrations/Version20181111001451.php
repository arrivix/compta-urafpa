<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181111001451 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE quinquenal_contract_laboratory_project DROP FOREIGN KEY FK_FEDFB7415DEB71D1');
        $this->addSql('ALTER TABLE quinquenal_contract_laboratory_project DROP FOREIGN KEY FK_FEDFB741670D601');
        $this->addSql('DROP TABLE laboratory_project');
        $this->addSql('DROP TABLE quinquenal_contract');
        $this->addSql('DROP TABLE quinquenal_contract_laboratory_project');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE laboratory_project (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL COLLATE utf8mb4_unicode_ci, description LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, persistent TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quinquenal_contract (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci, UNIQUE INDEX UNIQ_2B356BF75E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quinquenal_contract_laboratory_project (quinquenal_contract_id INT NOT NULL, laboratory_project_id INT NOT NULL, INDEX IDX_FEDFB741670D601 (quinquenal_contract_id), INDEX IDX_FEDFB7415DEB71D1 (laboratory_project_id), PRIMARY KEY(quinquenal_contract_id, laboratory_project_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE quinquenal_contract_laboratory_project ADD CONSTRAINT FK_FEDFB7415DEB71D1 FOREIGN KEY (laboratory_project_id) REFERENCES laboratory_project (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE quinquenal_contract_laboratory_project ADD CONSTRAINT FK_FEDFB741670D601 FOREIGN KEY (quinquenal_contract_id) REFERENCES quinquenal_contract (id) ON DELETE CASCADE');
    }
}
