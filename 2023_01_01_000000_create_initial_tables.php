// database/migrations/2023_01_01_000000_create_initial_tables.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInitialTables extends Migration
{
    public function up()
    {
        // Table des structures
        Schema::create('structures', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->enum('type', ['MINISTRE', 'DEP', 'CPP', 'CEI']);
            $table->foreignId('parent_id')->nullable()->constrained('structures');
            $table->timestamps();
        });

        // Table des rôles
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('guard_name')->default('web');
            $table->timestamps();
        });

        // Table des utilisateurs
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('telephone')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreignId('structure_id')->constrained('structures');
            $table->rememberToken();
            $table->timestamps();
        });

        // Table des dossiers
        Schema::create('dossiers', function (Blueprint $table) {
            $table->id();
            $table->string('numero')->unique();
            $table->string('intitule');
            $table->enum('type', ['INTERNE', 'EXTERNE']);
            $table->dateTime('date_creation');
            $table->enum('statut', ['EN_COURS', 'TRAITE', 'EN_CORRECTION', 'EN_INSTANCE']);
            $table->foreignId('expediteur_id')->constrained('users');
            $table->foreignId('proprietaire_actuel_id')->nullable()->constrained('users');
            $table->timestamps();
        });

        // Table des mouvements
        Schema::create('mouvements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dossier_id')->constrained('dossiers');
            $table->foreignId('expediteur_id')->constrained('users');
            $table->foreignId('destinataire_id')->constrained('users');
            $table->dateTime('date_envoi');
            $table->dateTime('date_reception')->nullable();
            $table->text('instruction')->nullable();
            $table->string('statut_mouvement');
            $table->timestamps();
        });

        // Table des notifications WhatsApp
        Schema::create('notification_whatsapp', function (Blueprint $table) {
            $table->id();
            $table->string('destinataire');
            $table->text('message');
            $table->dateTime('date_envoi');
            $table->enum('statut', ['ENVOYE', 'DELIVRE', 'LU', 'CONFIRME', 'ERREUR']);
            $table->foreignId('dossier_id')->constrained('dossiers');
            $table->timestamps();
        });

        // Table de l'historique des séjours
        Schema::create('historique_sejour_membre', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dossier_id')->constrained('dossiers');
            $table->foreignId('membre_id')->constrained('users');
            $table->dateTime('date_debut');
            $table->dateTime('date_fin')->nullable();
            $table->integer('jours_sejour')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('historique_sejour_membre');
        Schema::dropIfExists('notification_whatsapp');
        Schema::dropIfExists('mouvements');
        Schema::dropIfExists('dossiers');
        Schema::dropIfExists('model_has_roles');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('users');
        Schema::dropIfExists('structures');
    }
}
