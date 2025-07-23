# Architecture du Système DEP

## Diagramme de Classes

![Diagramme de Classes](diagrams/class-diagram.png)

## Diagramme de Séquence - Création de Dossier

![Diagramme de Séquence](diagrams/sequence-create-dossier.png)

## Workflow Principal

1. **Réception DEP** (Étape 1)
   - Dossier interne: Ministre → DEP
   - Dossier externe: Courrier → DEP

2. **Cotation** (Étape 2)
   - DEP attribue à CPP ou CEI

3. **Attribution** (Étape 3)
   - CPP/CEI attribue à un membre + instruction
   - Notification WhatsApp envoyée

4. **Traitement** (Étape 4)
   - Membre traite le dossier

5. **Validation** (Étape 5)
   - Dossier validé ou retourné en correction

## Technologies Utilisées

- **Backend**: Laravel 9 (PHP 8.1)
- **Frontend**: Tailwind CSS, Alpine.js
- **Base de données**: MySQL 8
- **API WhatsApp**: WhatsApp Business API
- **Génération PDF**: DomPDF
- **Authentification**: Laravel Sanctum
- **Gestion des rôles**: Spatie Laravel-Permission
