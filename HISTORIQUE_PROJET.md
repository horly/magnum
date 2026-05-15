# Historique du projet Magnum

Date de création de cet historique : 15 mai 2026

## 1. Mise en place de la page Services

- Création de la vue `resources/views/services.blade.php`.
- Remplacement de la page Laravel par défaut par une page Services personnalisée.
- Ajout de la route `/services`.
- Configuration temporaire de `/` pour afficher la page Services en attendant la future page Home.

Fichier concerné :

- `routes/web.php`

## 2. Reproduction du design fourni

- Analyse du PDF de référence `page services1 anglais 2.pdf`.
- Extraction des images intégrées au PDF.
- Création d'une page Services proche du design fourni :
  - hero avec image de fond réelle ;
  - menu de navigation en haut ;
  - titre `Sourcing Solutions` ;
  - section Services avec menu latéral ;
  - contenu principal ;
  - image de consultation à droite ;
  - bloc `Contact Us`.

Images ajoutées dans `public/images` :

- `services-hero.jpg`
- `services-consulting.jpg`
- `services-office.jpg`

## 3. Header et navigation

- Ajout du vrai logo blanc dans le header.
- Copie du fichier `logo-full-w.png` dans `public/images`.
- Utilisation du logo dans la navigation.
- Ajustement de la navbar pour respecter le design :
  - nav centrée ;
  - ligne rouge limitée au menu ;
  - ligne rouge active sous `Services` ;
  - positionnement de `Fr / En` au-dessus de `Careers`.
- Mise en place du switch de langue visuel entre `Fr` et `En`.

Image ajoutée :

- `logo-full-w.png`

## 4. Police et styles

- Passage de la police principale du site à `Quicksand`.
- Ajout du lien Google Fonts pour charger Quicksand.
- Ajustements de tailles, espacements et marges pour se rapprocher des captures fournies.
- Remplacement de la section Services en `container` centré plutôt qu'en `container-fluid`.

## 5. Multilingue anglais / français

- Mise en place d'un système multilingue simple dans `services.blade.php`.
- Langue par défaut : anglais.
- Français accessible avec `?lang=fr`.
- Anglais accessible avec `?lang=en`.
- Stockage de la langue choisie en session.
- Traduction du contenu principal :
  - navigation ;
  - hero ;
  - menu Services ;
  - contenu `Sourcing Solutions`;
  - bloc Contact ;
  - footer.

Exemples :

- `/services` affiche l'anglais par défaut.
- `/services?lang=fr` affiche le français.

## 6. Footer

- Ajout d'un footer complet selon la capture fournie.
- Copie du logo footer fourni `LOGO-magnum-w.png` dans `public/images`.
- Création du footer avec :
  - logo blanc ;
  - colonne Contact ;
  - colonne Quick Navigation ;
  - colonne Services ;
  - bouton rouge de retour en haut ;
  - ligne rouge horizontale ;
  - copyright ;
  - icônes réseaux sociaux ;
  - formes décoratives en arrière-plan.

Image ajoutée :

- `logo-magnum-footer-w.png`

## 7. Font Awesome

- Ajout de Font Awesome via CDN.
- Remplacement des icônes texte par des icônes Font Awesome :
  - adresse ;
  - téléphone ;
  - email ;
  - Facebook ;
  - Instagram ;
  - TikTok ;
  - LinkedIn ;
  - flèche retour haut.

## 8. Retour en haut de page

- Ajout de l'ancre `id="top"` sur le `body`.
- Le bouton rond rouge du footer pointe vers `#top`.
- Ajout de `scroll-behavior: smooth` pour une remontée fluide.

## 9. Copyright dynamique

- Remplacement de l'année fixe par l'année courante Laravel :

```blade
{{ now()->year }}
```

## 10. Vérifications

- Exécution répétée de la suite de tests Laravel après les modifications.
- Résultat actuel :

```text
Tests: 2 passed
```

## 11. Fichiers principaux modifiés ou ajoutés

- `routes/web.php`
- `resources/views/services.blade.php`
- `public/images/logo-full-w.png`
- `public/images/logo-magnum-footer-w.png`
- `public/images/services-hero.jpg`
- `public/images/services-consulting.jpg`
- `public/images/services-office.jpg`
- `public/images/world-map-real.svg`

## 12. Carte du monde en arrière-plan

- Ajout d'une vraie carte du monde en SVG derrière la zone `Sourcing Solutions`.
- La première carte dessinée manuellement a été supprimée car elle n'était pas une carte réelle.
- Nouvelle source utilisée : Wikimedia Commons, `BlankMap-World.svg`, domaine public.
- La carte a été sauvegardée localement dans `public/images/world-map-real.svg`.
- Les couleurs ont été éclaircies pour obtenir un rendu gris très discret, proche de la maquette.
- La carte a ensuite été agrandie et repositionnée pour couvrir toute la zone de contenu Services.

## 13. Notes importantes pour la suite

- Toute nouvelle section ou tout nouveau texte ajouté au site doit être traduit en anglais et en français.
- La page Home reste à créer plus tard.
- La route `/` affiche actuellement la page Services en attendant la vraie page Home.
- Le design actuel suit les captures fournies pour la page Services.

## 14. Variante Logistics Solutions

- Ajout d'un état `Logistics Solutions` dans la page Services.
- Le clic sur `Logistics Solutions` dans le menu latéral ouvre :

```text
/services?service=logistics
```

- Le clic sur `Sourcing Solutions` ouvre :

```text
/services?service=sourcing
```

- Le footer reste identique et commun aux deux contenus.
- Le contenu Logistics est disponible en anglais et en français.
- Le menu latéral met automatiquement en surbrillance le service actif.
- Le hero et le contenu principal changent selon le service actif.

## 15. Animations de transition

- Ajout d'une transition légère lors de l'arrivée sur la page :
  - apparition progressive ;
  - léger déplacement vertical.
- Ajout d'une transition de sortie au clic sur les liens internes de changement de langue ou de service.
- Les animations respectent `prefers-reduced-motion` pour les utilisateurs qui souhaitent réduire les mouvements.

## 16. Variante OEM Representation

- Ajout d'un état `OEM representation` dans la page Services.
- Le clic sur `OEM representation` dans le menu latéral ouvre :

```text
/services?service=oem
```

- Le menu latéral met `OEM representation` en surbrillance.
- Le contenu OEM suit la maquette fournie :
  - titre `OEM representation` ;
  - sous-titre sur la disponibilité des stocks, les prix compétitifs et le support ;
  - textes de présentation ;
  - section `Our OEM Representation Services` ;
  - points `Guaranteed Stock Availability` et `Competitive Pricing` ;
  - bloc final `Get in Touch`.
- Le contenu OEM est disponible en anglais et en français.
- Le footer reste commun et inchangé.

## 17. Image hero OEM

- Correction du visuel de la variante `OEM representation`.
- Extraction de la photo OEM depuis le PDF source : ouvrière avec casque jaune et cartons.
- Création de l'asset :

```text
public/images/services-oem.jpg
```

- La photo a été inversée horizontalement pour respecter la maquette fournie.
- La page `/services?service=oem` utilise maintenant ce visuel dédié au lieu de l'image Sourcing.
