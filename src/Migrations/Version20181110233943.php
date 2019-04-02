<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181110233943 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE laboratory_project_quinquenal_contract DROP FOREIGN KEY FK_25F13D585DEB71D1');
        $this->addSql('ALTER TABLE laboratory_project_quinquenal_contract DROP FOREIGN KEY FK_25F13D58670D601');
        $this->addSql('DROP TABLE laboratory_project');
        $this->addSql('DROP TABLE laboratory_project_quinquenal_contract');
        $this->addSql('DROP TABLE quinquenal_contract');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE laboratory_project (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL COLLATE utf8mb4_unicode_ci, description LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, persistent TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE laboratory_project_quinquenal_contract (laboratory_project_id INT NOT NULL, quinquenal_contract_id INT NOT NULL, INDEX IDX_25F13D585DEB71D1 (laboratory_project_id), INDEX IDX_25F13D58670D601 (quinquenal_contract_id), PRIMARY KEY(laboratory_project_id, quinquenal_contract_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quinquenal_contract (id INT AUTO_INCREMENT NOT NULL, begin_date DATE NOT NULL, end_date DATE NOT NULL, name VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE laboratory_project_quinquenal_contract ADD CONSTRAINT FK_25F13D585DEB71D1 FOREIGN KEY (laboratory_project_id) REFERENCES laboratory_project (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE laboratory_project_quinquenal_contract ADD CONSTRAINT FK_25F13D58670D601 FOREIGN KEY (quinquenal_contract_id) REFERENCES quinquenal_contract (id) ON DELETE CASCADE');
    }
}
