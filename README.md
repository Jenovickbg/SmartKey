
# Système d'Accès par Badge Électronique

Un système d'accès par badge électronique permettant de contrôler l'accès à des zones sécurisées. Ce projet utilise un microcontrôleur **ESP32** avec la technologie **RFID** pour l'identification des utilisateurs. L'objectif est de fournir une méthode simple et sécurisée pour entrer dans des locaux, avec la possibilité de gérer les badges et les autorisations d'accès via une interface Web.

## Table des Matières

1. [Introduction](#introduction)
2. [Composants utilisés](#composants-utilisés)
3. [Installation](#installation)
4. [Configuration du système](#configuration-du-système)
5. [Fonctionnalités](#fonctionnalités)
6. [Contribuer](#contribuer)
7. [Licence](#licence)

## Introduction

Ce système d'accès par badge électronique est conçu pour contrôler l'entrée dans un bâtiment ou une zone en utilisant des badges RFID. L'ESP32 gère la communication avec un lecteur RFID et autorise l'accès en fonction des données lues sur les badges. Ce projet inclut une interface web qui permet aux administrateurs de gérer les utilisateurs, d'ajouter ou de supprimer des badges, et de visualiser les logs d'accès.

## Composants utilisés

- **ESP32** : Microcontrôleur pour la gestion du système.
- **Lecteur RFID** : Pour la lecture des informations des badges électroniques.
- **Badge RFID** : Identifiant unique pour chaque utilisateur.
- **Serveur Web** : Pour gérer les utilisateurs et les autorisations d'accès.
- **Serveur de base de données** : Pour stocker les informations des utilisateurs et des badges (peut être une base de données locale ou sur un serveur distant).

## Installation

### Prérequis

Avant de démarrer, assurez-vous d'avoir installé les outils suivants :

- **Arduino IDE** : Pour la programmation de l'ESP32.
- **Bibliothèque ESP32 pour Arduino** : À installer via le gestionnaire de bibliothèques Arduino.
- **Bibliothèque RFID** : Pour la gestion du lecteur RFID (par exemple, **MFRC522**).

### Étapes d'installation

1. **Clonez le dépôt GitHub** :
   ```bash
   git clone https://github.com/votre-utilisateur/nom-du-depot.git
   cd nom-du-depot
   ```

2. **Ouvrez le projet dans l'Arduino IDE** :
   - Importez le fichier `.ino` dans l'Arduino IDE.

3. **Configurer l'ESP32** :
   - Sélectionnez le bon modèle d'ESP32 dans l'Arduino IDE.
   - Assurez-vous que les bons ports sont sélectionnés.

4. **Téléversez le code sur l'ESP32** :
   - Cliquez sur "Téléverser" pour charger le code sur l'ESP32.

## Configuration du système

1. **Connectez le lecteur RFID à l'ESP32** :
   - **VCC** à 5V
   - **GND** à GND
   - **SDA** à GPIO 21 (ou un autre GPIO selon la configuration de votre ESP32)
   - **SCK** à GPIO 18
   - **MOSI** à GPIO 23
   - **MISO** à GPIO 19
   - **RST** à GPIO 4

2. **Configurer l'interface Web** :
   - L'ESP32 héberge une page Web accessible via son adresse IP locale.
   - Vous pouvez configurer l'interface pour ajouter et supprimer des utilisateurs.

## Fonctionnalités

- **Lecture de badge RFID** : Lorsqu'un badge est présenté au lecteur RFID, le système compare l'ID du badge avec les données stockées dans la base de données pour autoriser ou refuser l'accès.
- **Interface Web** : Gérer les utilisateurs et les autorisations d'accès via une interface web simple.
- **Logs d'accès** : Enregistrer chaque tentative d'accès avec les détails du badge et l'heure.
- **Ajout/Suppression de badges** : Ajouter ou supprimer des badges via l'interface Web.

## Contribuer

Si vous souhaitez contribuer à ce projet, n'hésitez pas à fork le dépôt, à créer une branche et à soumettre une pull request. Veuillez vous assurer que votre code est bien documenté et testé.

## Licence

Ce projet est sous licence **MIT**. Consultez le fichier `LICENSE` pour plus de détails.
