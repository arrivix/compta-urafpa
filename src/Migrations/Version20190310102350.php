<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190310102350 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE balance (id INT AUTO_INCREMENT NOT NULL, create_user_id INT NOT NULL, last_modification_user_id INT DEFAULT NULL, validation_user_id INT DEFAULT NULL, constructor VARCHAR(255) NOT NULL, serv_date DATE DEFAULT NULL, modele VARCHAR(255) NOT NULL, serial_number VARCHAR(255) NOT NULL, scale_min INT NOT NULL, scale_max INT NOT NULL, active TINYINT(1) NOT NULL, archived VARCHAR(255) NOT NULL, create_date DATETIME NOT NULL, modify_date DATETIME DEFAULT NULL, validation_date DATETIME DEFAULT NULL, INDEX IDX_ACF41FFE85564492 (create_user_id), INDEX IDX_ACF41FFE64D5A2DC (last_modification_user_id), INDEX IDX_ACF41FFEB6EB8E9B (validation_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE balance_user (balance_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_9FB7274EAE91A3DD (balance_id), INDEX IDX_9FB7274EA76ED395 (user_id), PRIMARY KEY(balance_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE doccument_file (id INT AUTO_INCREMENT NOT NULL, file_name VARCHAR(255) NOT NULL, date_upload DATE NOT NULL, md5 VARCHAR(32) NOT NULL, sha1 VARCHAR(40) NOT NULL, size DOUBLE PRECISION NOT NULL, version INT NOT NULL, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE document (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, description LONGTEXT DEFAULT NULL, file_name VARCHAR(255) NOT NULL, folder VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE document_document_type (document_id INT NOT NULL, document_type_id INT NOT NULL, INDEX IDX_CC57F31C33F7837 (document_id), INDEX IDX_CC57F3161232A4F (document_type_id), PRIMARY KEY(document_id, document_type_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE document_page (id INT AUTO_INCREMENT NOT NULL, document_id INT NOT NULL, num_page SMALLINT NOT NULL, end_num_page SMALLINT NOT NULL, INDEX IDX_B3BE3AB3C33F7837 (document_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE document_type (id INT AUTO_INCREMENT NOT NULL, laboratory_origin_id INT DEFAULT NULL, name VARCHAR(100) NOT NULL, description LONGTEXT NOT NULL, acro VARCHAR(6) NOT NULL, folder VARCHAR(20) NOT NULL, external_resource TINYINT(1) NOT NULL, active TINYINT(1) NOT NULL, INDEX IDX_2B6ADBBAD41879E9 (laboratory_origin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE label_form (id INT AUTO_INCREMENT NOT NULL, label_type_id INT NOT NULL, active TINYINT(1) NOT NULL, INDEX IDX_9EB0688379CD25BA (label_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE label_form_field (id INT AUTO_INCREMENT NOT NULL, label_form_field_type_id INT NOT NULL, hierarchy SMALLINT NOT NULL, required TINYINT(1) NOT NULL, INDEX IDX_A54285ED055A9A1 (label_form_field_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE label_form_field_label_form (label_form_field_id INT NOT NULL, label_form_id INT NOT NULL, INDEX IDX_35C7214F3138FDC7 (label_form_field_id), INDEX IDX_35C7214FE3773254 (label_form_id), PRIMARY KEY(label_form_field_id, label_form_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE label_form_field_result (id INT AUTO_INCREMENT NOT NULL, result_string VARCHAR(255) DEFAULT NULL, result_text LONGTEXT DEFAULT NULL, result_integer INT DEFAULT NULL, result_float DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE label_form_field_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(110) NOT NULL, text LONGTEXT DEFAULT NULL, type_field VARCHAR(110) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE label_type (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(120) NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE page_label (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE page_label_document_page (page_label_id INT NOT NULL, document_page_id INT NOT NULL, INDEX IDX_55DCD91BB3262819 (page_label_id), INDEX IDX_55DCD91BA829C538 (document_page_id), PRIMARY KEY(page_label_id, document_page_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE page_label_label_type (page_label_id INT NOT NULL, label_type_id INT NOT NULL, INDEX IDX_F30743FCB3262819 (page_label_id), INDEX IDX_F30743FC79CD25BA (label_type_id), PRIMARY KEY(page_label_id, label_type_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE laboratory (id INT AUTO_INCREMENT NOT NULL, creation_user_id INT NOT NULL, modification_user_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, short_name VARCHAR(50) DEFAULT NULL, creation_date DATETIME NOT NULL, modify_date DATETIME NOT NULL, INDEX IDX_FDC719A8876F01FE (creation_user_id), INDEX IDX_FDC719A8337A48F0 (modification_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE responsible (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, laboratory_id INT NOT NULL, INDEX IDX_97E625E8A76ED395 (user_id), INDEX IDX_97E625E82F2A371E (laboratory_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE responsible_title (id INT AUTO_INCREMENT NOT NULL, responsible_id INT NOT NULL, laboratory_id INT NOT NULL, ongoing TINYINT(1) NOT NULL, begin_date DATE NOT NULL, end_date DATE DEFAULT NULL, INDEX IDX_59701DFD602AD315 (responsible_id), INDEX IDX_59701DFD2F2A371E (laboratory_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_title (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, female_name VARCHAR(255) NOT NULL, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE unic_label (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE institutional_member (id INT AUTO_INCREMENT NOT NULL, laboratory_id INT NOT NULL, begin_date DATE NOT NULL, end_date DATE DEFAULT NULL, UNIQUE INDEX UNIQ_E4BBFC62F2A371E (laboratory_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE scientific_area (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, mission_letter VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ScientifiAreasScientificManager_Contact (scientific_area_id INT NOT NULL, contact_id INT NOT NULL, INDEX IDX_126C609A25E1D8D6 (scientific_area_id), INDEX IDX_126C609AE7A1254A (contact_id), PRIMARY KEY(scientific_area_id, contact_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ScientifiAreasPermanentGuest_Contact (scientific_area_id INT NOT NULL, contact_id INT NOT NULL, INDEX IDX_174B0F6625E1D8D6 (scientific_area_id), INDEX IDX_174B0F66E7A1254A (contact_id), PRIMARY KEY(scientific_area_id, contact_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ScientifiAreasPermanentVoter_Contact (scientific_area_id INT NOT NULL, contact_id INT NOT NULL, INDEX IDX_AE27E68A25E1D8D6 (scientific_area_id), INDEX IDX_AE27E68AE7A1254A (contact_id), PRIMARY KEY(scientific_area_id, contact_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipment (id INT AUTO_INCREMENT NOT NULL, id_urafpa INT DEFAULT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, brand VARCHAR(50) NOT NULL, model VARCHAR(50) DEFAULT NULL, serial_number VARCHAR(50) DEFAULT NULL, num_compt VARCHAR(50) NOT NULL, date_commissioning DATE DEFAULT NULL, voltage INT DEFAULT NULL, power INT DEFAULT NULL, reception_date DATE DEFAULT NULL, reliability SMALLINT NOT NULL, inventory_release_status TINYINT(1) NOT NULL, inventory_release_date DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fluids (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, mandatory_control TINYINT(1) NOT NULL, safety_element_mandatory TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE room (id INT AUTO_INCREMENT NOT NULL, site_id INT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, INDEX IDX_729F519BF6BD1646 (site_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE room_laboratory (room_id INT NOT NULL, laboratory_id INT NOT NULL, INDEX IDX_C93569B454177093 (room_id), INDEX IDX_C93569B42F2A371E (laboratory_id), PRIMARY KEY(room_id, laboratory_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE site_location (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE technical_manager (id INT AUTO_INCREMENT NOT NULL, contact_id INT NOT NULL, INDEX IDX_96688008E7A1254A (contact_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE administrative_status (id INT AUTO_INCREMENT NOT NULL, link_laboratory_id INT NOT NULL, hierarchical_responsible_id INT DEFAULT NULL, type_mission INT NOT NULL, active TINYINT(1) NOT NULL, begin_date DATE NOT NULL, end_date DATE DEFAULT NULL, INDEX IDX_A3D3E18E5AB23B02 (link_laboratory_id), INDEX IDX_A3D3E18E5E06C162 (hierarchical_responsible_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE company_contact (id INT AUTO_INCREMENT NOT NULL, company_name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, company_adress_nb_street VARCHAR(15) DEFAULT NULL, company_adress_name_street VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE company_department (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, text LONGTEXT NOT NULL, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, prenom VARCHAR(255) NOT NULL, string VARCHAR(255) NOT NULL, mail VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact_mail (id INT AUTO_INCREMENT NOT NULL, mail VARCHAR(255) NOT NULL, private TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact_phone (id INT AUTO_INCREMENT NOT NULL, number INT NOT NULL, private TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE department_address (id INT AUTO_INCREMENT NOT NULL, add_name TINYINT(1) NOT NULL, other_entity_line VARCHAR(255) DEFAULT NULL, streetline VARCHAR(255) NOT NULL, other_frst_street_line VARCHAR(255) DEFAULT NULL, other_scnd_street_line VARCHAR(255) NOT NULL, postal_code VARCHAR(15) DEFAULT NULL, postal_cedex SMALLINT DEFAULT NULL, city_name VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE department_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, descriptoin VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE internal_human_ressources (id INT AUTO_INCREMENT NOT NULL, time_dedicated_to DOUBLE PRECISION NOT NULL, begin_date DATE NOT NULL, active TINYINT(1) NOT NULL, end_date DATE DEFAULT NULL, administrative_validation TINYINT(1) NOT NULL, date_validation DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE balance ADD CONSTRAINT FK_ACF41FFE85564492 FOREIGN KEY (create_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE balance ADD CONSTRAINT FK_ACF41FFE64D5A2DC FOREIGN KEY (last_modification_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE balance ADD CONSTRAINT FK_ACF41FFEB6EB8E9B FOREIGN KEY (validation_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE balance_user ADD CONSTRAINT FK_9FB7274EAE91A3DD FOREIGN KEY (balance_id) REFERENCES balance (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE balance_user ADD CONSTRAINT FK_9FB7274EA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE document_document_type ADD CONSTRAINT FK_CC57F31C33F7837 FOREIGN KEY (document_id) REFERENCES document (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE document_document_type ADD CONSTRAINT FK_CC57F3161232A4F FOREIGN KEY (document_type_id) REFERENCES document_type (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE document_page ADD CONSTRAINT FK_B3BE3AB3C33F7837 FOREIGN KEY (document_id) REFERENCES document (id)');
        $this->addSql('ALTER TABLE document_type ADD CONSTRAINT FK_2B6ADBBAD41879E9 FOREIGN KEY (laboratory_origin_id) REFERENCES laboratory (id)');
        $this->addSql('ALTER TABLE label_form ADD CONSTRAINT FK_9EB0688379CD25BA FOREIGN KEY (label_type_id) REFERENCES label_type (id)');
        $this->addSql('ALTER TABLE label_form_field ADD CONSTRAINT FK_A54285ED055A9A1 FOREIGN KEY (label_form_field_type_id) REFERENCES label_form_field_type (id)');
        $this->addSql('ALTER TABLE label_form_field_label_form ADD CONSTRAINT FK_35C7214F3138FDC7 FOREIGN KEY (label_form_field_id) REFERENCES label_form_field (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE label_form_field_label_form ADD CONSTRAINT FK_35C7214FE3773254 FOREIGN KEY (label_form_id) REFERENCES label_form (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE page_label_document_page ADD CONSTRAINT FK_55DCD91BB3262819 FOREIGN KEY (page_label_id) REFERENCES page_label (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE page_label_document_page ADD CONSTRAINT FK_55DCD91BA829C538 FOREIGN KEY (document_page_id) REFERENCES document_page (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE page_label_label_type ADD CONSTRAINT FK_F30743FCB3262819 FOREIGN KEY (page_label_id) REFERENCES page_label (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE page_label_label_type ADD CONSTRAINT FK_F30743FC79CD25BA FOREIGN KEY (label_type_id) REFERENCES label_type (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE laboratory ADD CONSTRAINT FK_FDC719A8876F01FE FOREIGN KEY (creation_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE laboratory ADD CONSTRAINT FK_FDC719A8337A48F0 FOREIGN KEY (modification_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE responsible ADD CONSTRAINT FK_97E625E8A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE responsible ADD CONSTRAINT FK_97E625E82F2A371E FOREIGN KEY (laboratory_id) REFERENCES laboratory (id)');
        $this->addSql('ALTER TABLE responsible_title ADD CONSTRAINT FK_59701DFD602AD315 FOREIGN KEY (responsible_id) REFERENCES responsible (id)');
        $this->addSql('ALTER TABLE responsible_title ADD CONSTRAINT FK_59701DFD2F2A371E FOREIGN KEY (laboratory_id) REFERENCES laboratory (id)');
        $this->addSql('ALTER TABLE institutional_member ADD CONSTRAINT FK_E4BBFC62F2A371E FOREIGN KEY (laboratory_id) REFERENCES laboratory (id)');
        $this->addSql('ALTER TABLE ScientifiAreasScientificManager_Contact ADD CONSTRAINT FK_126C609A25E1D8D6 FOREIGN KEY (scientific_area_id) REFERENCES scientific_area (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ScientifiAreasScientificManager_Contact ADD CONSTRAINT FK_126C609AE7A1254A FOREIGN KEY (contact_id) REFERENCES contact (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ScientifiAreasPermanentGuest_Contact ADD CONSTRAINT FK_174B0F6625E1D8D6 FOREIGN KEY (scientific_area_id) REFERENCES scientific_area (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ScientifiAreasPermanentGuest_Contact ADD CONSTRAINT FK_174B0F66E7A1254A FOREIGN KEY (contact_id) REFERENCES contact (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ScientifiAreasPermanentVoter_Contact ADD CONSTRAINT FK_AE27E68A25E1D8D6 FOREIGN KEY (scientific_area_id) REFERENCES scientific_area (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ScientifiAreasPermanentVoter_Contact ADD CONSTRAINT FK_AE27E68AE7A1254A FOREIGN KEY (contact_id) REFERENCES contact (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE room ADD CONSTRAINT FK_729F519BF6BD1646 FOREIGN KEY (site_id) REFERENCES site_location (id)');
        $this->addSql('ALTER TABLE room_laboratory ADD CONSTRAINT FK_C93569B454177093 FOREIGN KEY (room_id) REFERENCES room (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE room_laboratory ADD CONSTRAINT FK_C93569B42F2A371E FOREIGN KEY (laboratory_id) REFERENCES laboratory (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE technical_manager ADD CONSTRAINT FK_96688008E7A1254A FOREIGN KEY (contact_id) REFERENCES contact (id)');
        $this->addSql('ALTER TABLE administrative_status ADD CONSTRAINT FK_A3D3E18E5AB23B02 FOREIGN KEY (link_laboratory_id) REFERENCES laboratory (id)');
        $this->addSql('ALTER TABLE administrative_status ADD CONSTRAINT FK_A3D3E18E5E06C162 FOREIGN KEY (hierarchical_responsible_id) REFERENCES contact (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE balance_user DROP FOREIGN KEY FK_9FB7274EAE91A3DD');
        $this->addSql('ALTER TABLE document_document_type DROP FOREIGN KEY FK_CC57F31C33F7837');
        $this->addSql('ALTER TABLE document_page DROP FOREIGN KEY FK_B3BE3AB3C33F7837');
        $this->addSql('ALTER TABLE page_label_document_page DROP FOREIGN KEY FK_55DCD91BA829C538');
        $this->addSql('ALTER TABLE document_document_type DROP FOREIGN KEY FK_CC57F3161232A4F');
        $this->addSql('ALTER TABLE label_form_field_label_form DROP FOREIGN KEY FK_35C7214FE3773254');
        $this->addSql('ALTER TABLE label_form_field_label_form DROP FOREIGN KEY FK_35C7214F3138FDC7');
        $this->addSql('ALTER TABLE label_form_field DROP FOREIGN KEY FK_A54285ED055A9A1');
        $this->addSql('ALTER TABLE label_form DROP FOREIGN KEY FK_9EB0688379CD25BA');
        $this->addSql('ALTER TABLE page_label_label_type DROP FOREIGN KEY FK_F30743FC79CD25BA');
        $this->addSql('ALTER TABLE page_label_document_page DROP FOREIGN KEY FK_55DCD91BB3262819');
        $this->addSql('ALTER TABLE page_label_label_type DROP FOREIGN KEY FK_F30743FCB3262819');
        $this->addSql('ALTER TABLE document_type DROP FOREIGN KEY FK_2B6ADBBAD41879E9');
        $this->addSql('ALTER TABLE responsible DROP FOREIGN KEY FK_97E625E82F2A371E');
        $this->addSql('ALTER TABLE responsible_title DROP FOREIGN KEY FK_59701DFD2F2A371E');
        $this->addSql('ALTER TABLE institutional_member DROP FOREIGN KEY FK_E4BBFC62F2A371E');
        $this->addSql('ALTER TABLE room_laboratory DROP FOREIGN KEY FK_C93569B42F2A371E');
        $this->addSql('ALTER TABLE administrative_status DROP FOREIGN KEY FK_A3D3E18E5AB23B02');
        $this->addSql('ALTER TABLE responsible_title DROP FOREIGN KEY FK_59701DFD602AD315');
        $this->addSql('ALTER TABLE ScientifiAreasScientificManager_Contact DROP FOREIGN KEY FK_126C609A25E1D8D6');
        $this->addSql('ALTER TABLE ScientifiAreasPermanentGuest_Contact DROP FOREIGN KEY FK_174B0F6625E1D8D6');
        $this->addSql('ALTER TABLE ScientifiAreasPermanentVoter_Contact DROP FOREIGN KEY FK_AE27E68A25E1D8D6');
        $this->addSql('ALTER TABLE room_laboratory DROP FOREIGN KEY FK_C93569B454177093');
        $this->addSql('ALTER TABLE room DROP FOREIGN KEY FK_729F519BF6BD1646');
        $this->addSql('ALTER TABLE ScientifiAreasScientificManager_Contact DROP FOREIGN KEY FK_126C609AE7A1254A');
        $this->addSql('ALTER TABLE ScientifiAreasPermanentGuest_Contact DROP FOREIGN KEY FK_174B0F66E7A1254A');
        $this->addSql('ALTER TABLE ScientifiAreasPermanentVoter_Contact DROP FOREIGN KEY FK_AE27E68AE7A1254A');
        $this->addSql('ALTER TABLE technical_manager DROP FOREIGN KEY FK_96688008E7A1254A');
        $this->addSql('ALTER TABLE administrative_status DROP FOREIGN KEY FK_A3D3E18E5E06C162');
        $this->addSql('DROP TABLE balance');
        $this->addSql('DROP TABLE balance_user');
        $this->addSql('DROP TABLE doccument_file');
        $this->addSql('DROP TABLE document');
        $this->addSql('DROP TABLE document_document_type');
        $this->addSql('DROP TABLE document_page');
        $this->addSql('DROP TABLE document_type');
        $this->addSql('DROP TABLE label_form');
        $this->addSql('DROP TABLE label_form_field');
        $this->addSql('DROP TABLE label_form_field_label_form');
        $this->addSql('DROP TABLE label_form_field_result');
        $this->addSql('DROP TABLE label_form_field_type');
        $this->addSql('DROP TABLE label_type');
        $this->addSql('DROP TABLE page_label');
        $this->addSql('DROP TABLE page_label_document_page');
        $this->addSql('DROP TABLE page_label_label_type');
        $this->addSql('DROP TABLE laboratory');
        $this->addSql('DROP TABLE responsible');
        $this->addSql('DROP TABLE responsible_title');
        $this->addSql('DROP TABLE type_title');
        $this->addSql('DROP TABLE unic_label');
        $this->addSql('DROP TABLE institutional_member');
        $this->addSql('DROP TABLE scientific_area');
        $this->addSql('DROP TABLE ScientifiAreasScientificManager_Contact');
        $this->addSql('DROP TABLE ScientifiAreasPermanentGuest_Contact');
        $this->addSql('DROP TABLE ScientifiAreasPermanentVoter_Contact');
        $this->addSql('DROP TABLE equipment');
        $this->addSql('DROP TABLE fluids');
        $this->addSql('DROP TABLE room');
        $this->addSql('DROP TABLE room_laboratory');
        $this->addSql('DROP TABLE site_location');
        $this->addSql('DROP TABLE technical_manager');
        $this->addSql('DROP TABLE administrative_status');
        $this->addSql('DROP TABLE company_contact');
        $this->addSql('DROP TABLE company_department');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE contact_mail');
        $this->addSql('DROP TABLE contact_phone');
        $this->addSql('DROP TABLE department_address');
        $this->addSql('DROP TABLE department_type');
        $this->addSql('DROP TABLE internal_human_ressources');
    }
}
