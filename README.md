# Rapport de Projet

## 1. Couverture

-   **Titre** : Site Web pour l'achat d'aliments frais
-   **Auteur** : Rigoberto Diaz Enamorado
-   **Date** : 25/10/2024
-   **Institution** : Teccart

## 2. Table des matières

-   [Résumé](#3-résumé)
-   [Introduction](#4-introduction)
-   [Méthodologie](#5-méthodologie)
-   [Développement](#6-développement)
-   [Essais](#7-essais)
-   [Déploiement](#8-déploiement)
-   [Conclusions](#9-conclusions)
-   [Annexes](#annexes)

---

## 3. Résumé

Ce projet consiste à développer un site Web pour l'achat d'aliments frais tels que des légumes, des fruits, des viandes, et plus encore. Le système a été développé en utilisant Laravel, avec MySQL comme base de données et Bootstrap pour l'interface. Il permet aux utilisateurs de faire des achats en ligne et inclut des modules d'administration pour gérer les produits. Un système d'authentification a été implémenté avec Bootstrap UI et l'option `--auth`, permettant aux utilisateurs de s'inscrire, de se connecter, et de gérer leurs profils.

## 4. Introduction

L'objectif de ce projet est de créer une plateforme Web permettant aux utilisateurs d'acheter des aliments frais rapidement et facilement, tout en permettant aux administrateurs de gérer le catalogue de produits. Cette plateforme offre une solution efficace pour l'achat d'aliments en ligne, offrant une expérience utilisateur intuitive et un outil de gestion robuste pour les opérateurs du site.

## 5. Méthodologie

**Outils :**

-   Langage de programmation : PHP 8.2.12
-   Cadre : Laravel 10.48.22
-   Base de données : MySQL 10.4.32-MariaDB
-   Frontend : Bootstrap 5.3.3 pour l'interface graphique.
-   Système d'authentification : Laravel UI v4.2.0 pour gérer l'authentification de l'utilisateur.
-   Environnement de développement : Visual Studio Code (VSCode) 1.94.2.

**Architecture :**
Le projet suit l'architecture MVC (Modèle-Vue-Contrôleur) typique de Laravel :

-   **Modèles** : définis dans `app/Models`, représentant les principales entités telles que `Product` et `User`.
-   **Contrôleurs** : situés dans `app/Http/Controllers`, gérant la logique métier pour les produits et utilisateurs.
-   **Vues** : situées dans `resources/views`, pour l'interface graphique avec Bootstrap.
-   **Database** : configuration situées dans `config/database.php`.

## 6. Développement

### Principales caractéristiques :

1. **Achats d'aliments** : Les utilisateurs inscrits peuvent naviguer dans les catégories d'aliments frais, ajouter des produits au panier et finaliser leurs achats. Le catalogue comprend des images, des prix, et des descriptions détaillées.
2. **Gestion des produits** : Le module d'administration permet aux opérateurs de site d'ajouter, modifier, et supprimer des produits, facilitant la gestion des stocks.
3. **Authentification de l'utilisateur** : Laravel UI avec Bootstrap `--auth` permet l'enregistrement, la connexion, et la gestion de profil pour les utilisateurs authentifiés.
4. **Panneau d'administration** : Les administrateurs accèdent à un tableau de bord pour gérer les produits. Les opérations CRUD sont implémentées pour un contrôle complet du catalogue.

**Intégration de l'interface utilisateur Bootstrap avec --auth :**

-   Création de formulaires pour l'inscription et la connexion des utilisateurs.
-   Implémentation de rôles utilisateurs différenciant les administrateurs des utilisateurs réguliers.

**Structure du projet :**

-   **Fichiers de configuration** : le fichier `.env` gère les connexions à la base de données, les sessions, et d'autres paramètres.
-   **Module produits** : Les produits sont gérés par `AdminsController` dans `app/Http/Controllers/Admins/AdminsController.php`.
-   **Vues** : Bootstrap est utilisé dans les vues pour créer une conception réactive et conviviale, optimisée pour les appareils mobiles.

## 7. Essais

**Tests fonctionnels :**

-   Vérification du système d'authentification incluant :
    -   Inscription de l'utilisateur.
    -   Connexion.

**Tests de module de produit :**

-   Tests CRUD pour les produits :
    -   Création de nouveaux produits.
    -   Modification d'informations produit existantes.
    -   Suppression de produits de l'inventaire.

## 8. Déploiement

Le projet s'exécute localement à l'aide de XAMPP, qui fournit Apache et MySQL. Composer a été utilisé pour la gestion des dépendances, avec un fichier `composer.json` configuré pour maintenir les bibliothèques nécessaires au bon fonctionnement de Laravel et Bootstrap.

## 9. Conclusions

Le système d'achat d'aliments frais atteint son objectif en fournissant une plateforme fonctionnelle pour la vente de produits alimentaires. Les modules d'authentification et de gestion des produits facilitent la gestion pour les utilisateurs et les administrateurs. L'interface créée avec Bootstrap garantit une expérience utilisateur agréable sur tous types d'appareils.

---
