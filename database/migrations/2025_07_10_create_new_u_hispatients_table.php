<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('u_hispatients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('COMPANY', 10)->default('HIS');
            $table->string('BRANCH', 10)->default('HO');
            $table->string('CODE', 80)->unique();

            $table->string('NE_IDSERIES', 45)->nullable();
            $table->string('NE_IDYEAR', 5)->nullable();
            $table->string('NAME', 100)->nullable();
            $table->dateTime('DATECREATED')->nullable();
            $table->string('CREATEDBY', 20)->nullable();
            $table->dateTime('LASTUPDATED')->nullable();
            $table->string('LASTUPDATEDBY', 20)->nullable();
            $table->integer('RCDVERSION')->nullable();

            $table->string('U_LASTNAME', 50)->nullable();
            $table->string('U_FIRSTNAME', 50)->nullable();
            $table->string('U_MIDDLENAME', 30)->nullable();
            $table->string('U_EXTNAME', 15)->nullable();
            $table->date('U_BIRTHDATE')->nullable();
            $table->string('U_GENDER', 5)->nullable();
            $table->integer('U_ACTIVE')->nullable();
            $table->string('U_BIRTHPLACE', 100)->nullable();
            $table->string('U_ADDRESS', 255)->nullable();
            $table->string('U_CIVILSTATUS', 30)->nullable();
            $table->string('U_OCCUPATION', 30)->nullable();
            $table->string('U_NATIONALITY', 30)->nullable();
            $table->string('U_RELIGION', 30)->nullable();
            $table->string('U_FATHERNAME', 100)->nullable();
            $table->string('U_FATHERADDRESS', 255)->nullable();
            $table->string('U_FATHERTELNO', 50)->nullable();
            $table->string('U_MOTHERNAME', 100)->nullable();
            $table->string('U_MOTHERADDRESS', 255)->nullable();
            $table->string('U_MOTHERTELNO', 50)->nullable();
            $table->string('U_SPOUSENAME', 100)->nullable();
            $table->string('U_SPOUSEADDRESS', 255)->nullable();
            $table->string('U_SPOUSETELNO', 50)->nullable();
            $table->string('U_EMPLOYERNAME', 100)->nullable();
            $table->string('U_EMPLOYERADDRESS', 255)->nullable();
            $table->string('U_EMPLOYERTELNO', 50)->nullable();
            $table->string('U_CONTACTNAME', 100)->nullable();
            $table->string('U_CONTACTRELATIONSHIP', 30)->nullable();
            $table->string('U_CONTACTADDRESS', 255)->nullable();
            $table->string('U_CONTACTTELNO', 50)->nullable();
            $table->string('U_RESPONSIBLENAME', 100)->nullable();
            $table->string('U_RESPONSIBLEADDRESS', 255)->nullable();
            $table->string('U_RESPONSIBLEEMPLOYER', 100)->nullable();
            $table->string('U_RESPONSIBLETELNO', 50)->nullable();
            $table->integer('U_VISITCOUNT')->nullable();
            $table->string('U_TELNO', 50)->nullable();
            $table->integer('U_SERIES')->nullable();
            $table->string('U_CITY', 50)->nullable();
            $table->string('U_PROVINCE', 50)->nullable();
            $table->string('U_INFORMANTNAME', 50)->nullable();
            $table->string('U_INFORMANTRELATIONSHIP', 30)->nullable();
            $table->string('U_INFORMANTADDRESS', 255)->nullable();
            $table->string('U_INFORMANTTELNO', 50)->nullable();
            $table->tinyInteger('U_CONFIDENTIAL')->nullable();
            $table->tinyInteger('U_SCDISC')->nullable();
            $table->string('U_DISCCODE', 30)->nullable();

            for ($i = 1; $i <= 7; $i++) {
                $table->string("U_ALLERGY$i", 30)->nullable();
            }

            $table->string('U_COMPANY', 50)->nullable();
            $table->string('U_SSSNO', 30)->nullable();
            $table->string('U_TINNO', 30)->nullable();
            $table->string('U_CONTACTEMPLOYER', 100)->nullable();
            $table->time('U_BIRTHTIME')->nullable();
            $table->string('U_REGBY', 50)->nullable();
            $table->date('U_REGDATE')->nullable();
            $table->time('U_REGTIME')->nullable();
            $table->date('U_EXPIREDATE')->nullable();
            $table->tinyInteger('U_EXPIRED')->nullable();
            $table->tinyInteger('U_NEWBORNSTAT')->nullable();
            $table->time('NE_NEWBORN_BIRTHTIME')->nullable();
            $table->string('U_RESPONSIBLERELATIONSHIP', 30)->nullable();

            $fields = ['STREET', 'BARANGAY', 'ZIP', 'CITY', 'PROVINCE', 'COUNTRY'];
            $relatives = ['U', 'U_FATHER', 'U_MOTHER', 'U_SPOUSE', 'U_EMPLOYER', 'U_CONTACT', 'U_RESPONSIBLE'];

            foreach ($relatives as $prefix) {
                foreach ($fields as $field) {
                    $length = in_array($field, ['ZIP']) ? 30 : (in_array($field, ['BARANGAY', 'CITY', 'PROVINCE', 'COUNTRY']) ? 50 : 255);
                    $table->string("{$prefix}{$field}", $length)->nullable();
                }
            }

            $table->string('U_MOBILENO', 30)->nullable();
            $table->string('U_PHICMEMBERID', 30)->nullable();
            $table->string('U_HMO', 30)->nullable();
            $table->string('U_HMOMEMBERID', 30)->nullable();
            $table->string('U_EMAIL', 80)->nullable();
            $table->text('U_FINALDIAGNOSIS')->nullable();
            $table->string('NE_IDTYPE', 100)->nullable();
            $table->string('NE_IDVALUE', 150)->nullable();
            $table->string('NE_PREFIX', 250)->nullable();
            $table->string('NE_LEGALNAME', 250)->nullable();
            $table->string('NE_FORMERNAME', 250)->nullable();
            $table->string('NE_LANGUAGE', 250)->nullable();
            $table->string('NE_SPECIAL_COM_NEEDS', 250)->nullable();
            $table->string('NE_SPECIFY', 250)->nullable();
            $table->string('NE_MAILINGADDRESS', 250)->nullable();
            $table->string('NE_MAILINGCOUNTRY', 250)->nullable();
            $table->string('NE_MAILINGPROVINCE', 250)->nullable();
            $table->string('NE_MAILINGCITY', 250)->nullable();
            $table->string('NE_MAILINGZIP', 45)->nullable();
            $table->string('NE_SAMEWITHRESIDENT', 250)->nullable();
            $table->string('NE_EMPLOYMENTSTATUS', 250)->nullable();
            $table->string('NE_REFFERED_BY', 250)->nullable();
            $table->tinyInteger('NE_SOLOPARENT')->nullable();
            $table->integer('U_PWD')->nullable();
            $table->integer('U_INDIGENOUS')->nullable();

            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('NE_MOTHERMRN')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('u_hispatients');
    }
};
