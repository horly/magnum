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

## 18. Menu mobile

- Correction de l'affichage mobile de la navigation principale.
- Le menu principal est désormais caché sur les écrans mobiles.
- Ajout d'un bouton mobile avec icône Font Awesome pour ouvrir et fermer le menu.
- Le bouton utilise des libellés accessibles traduits en anglais et en français.
- Le menu mobile se ferme automatiquement après un clic sur un lien.
- Le comportement desktop reste inchangé.

## 19. Priorité visuelle du menu mobile

- Correction de la superposition du menu mobile.
- Le panneau mobile passe maintenant au premier plan au-dessus du hero et du titre.
- Le bouton d'ouverture/fermeture reste visible au-dessus du panneau.
- La langue FR/EN est intégrée en haut du panneau mobile ouvert.

## 20. Réorganisation des fichiers

- Séparation des textes de langue hors de la page Blade.
- Création des fichiers de traduction Laravel :

```text
resources/lang/en/services.php
resources/lang/fr/services.php
```

- La page Services utilise maintenant `trans('services')` pour charger le contenu selon la langue active.
- Extraction du CSS de la page vers :

```text
public/css/services.css
```

- Extraction du JavaScript de la page vers :

```text
public/js/services.js
```

- La vue `resources/views/services.blade.php` conserve principalement la structure HTML et les conditions d'affichage.

## 21. Correction UTF-8

- Correction des textes mal encodés dans les fichiers de langue anglais et français.
- Correction du `N°` dans l'adresse du footer.
- Correction du symbole copyright dans la Blade avec l'entité HTML `&copy;`.
- Correction des puces du footer dans le CSS avec la séquence `\2022` pour éviter l'affichage `â€¢`.
- Vérification qu'il ne reste plus de séquences corrompues comme `Â`, `Ã` ou `â€` dans les vues, langues et CSS.

## 22. Footer services cliquables

- Ajout d'un espacement CSS entre les puces du footer et les textes.
- La colonne `Services` du footer utilise maintenant des liens au lieu de simples textes.
- Les liens `Sourcing Solutions`, `Logistics Solutions` et `OEM representation` pointent vers les variantes de page déjà disponibles.
- Les autres services restent cliquables avec des ancres temporaires en attendant leurs pages dédiées.

## 23. Espacement langue et navigation

- Ajout d'un espace réservé à droite de la navigation desktop pour éloigner `CAREERS` du switch `FR/EN`.
- La ligne rouge de navigation s'arrête maintenant avant la zone de langue.
- Le comportement mobile du menu reste inchangé.

## 24. Ajustement final langue desktop

- Annulation de l'espace réservé à droite dans la navigation desktop.
- La ligne rouge retrouve son comportement précédent.
- Le switch `FR/EN` est simplement remonté pour créer plus d'espace avec `CAREERS`, comme demandé.

## 25. Hauteur du banner

- Augmentation légère de la hauteur du hero/banner desktop.
- Ajustement de la position du background pour afficher davantage l'image.
- Le texte du hero a été descendu pour conserver une composition proche de la maquette.

## 26. Agrandissement marqué du banner

- Le hero/banner desktop a été agrandi plus nettement.
- La hauteur passe à `560px` pour mieux afficher l'image de fond.
- Le texte du hero est redescendu afin de rester dans la zone basse du visuel.

## 27. Suppression ligne Logistics

- Suppression de la ligne grise de séparation sur la variante `Logistics Solutions`.
- Conservation de l'espacement vertical avant la section `Our Infrastructure`.

## 28. Alignement points Logistics

- Décalage réduit des blocs `Logistics` pour éviter que `State-of-the-Art Logistics Hub` colle au menu latéral.
- Harmonisation de la taille des titres de points Logistics avec le titre `Our Infrastructure`.

## 29. Nettoyage alignement Logistics

- Suppression du décalage négatif restant sur la section basse de `Logistics Solutions`.
- Le bloc `State-of-the-Art Logistics Hub` ne passe plus sous le menu latéral `Our services`.
- Harmonisation de la taille des paragraphes Logistics bas avec le texte d'introduction.

## 30. Image Logistics sans superposition

- Réduction de la largeur du texte des points Logistics pour créer une vraie colonne image à droite.
- Repositionnement de l'image Logistics afin qu'elle ne recouvre plus les textes.
- Conservation du placement des textes sous le menu `Our services` dans leur colonne de contenu.

## 31. Grille Logistics

- Remplacement du placement absolu de l'image Logistics par une grille texte/image.
- Le texte Logistics reste à gauche et l'image reste à droite sans pouvoir recouvrir le contenu.
- Nettoyage des anciennes règles responsive qui conservaient un positionnement absolu.

## 32. Texte Infrastructure et contact Logistics

- Déplacement du titre `Our Infrastructure: Enabling Efficiency and Growth` sous les paragraphes d'introduction de `Logistics Solutions`.
- La phrase `Contact Us...` de Logistics utilise maintenant la même taille que les paragraphes au-dessus.

## 33. Descente des points Logistics

- Descente du bloc des points Logistics pour éviter qu'il touche le menu latéral `Our services`.
- Conservation de la grille texte/image existante.

## 34. Page General Trade B2B

- Ajout de la variante `/services?service=trade` pour `General Trade- B2B`.
- Activation du lien `General Trade- B2B` dans le menu latéral `Our services` et dans la colonne `Services` du footer.
- Ajout des textes anglais et français dans `resources/lang/en/services.php` et `resources/lang/fr/services.php`.
- Utilisation des images récupérées depuis les extractions du PDF :

```text
public/images/services-trade.jpg
public/images/services-trade-support.jpg
```

- Conservation du même style général : hero pleine largeur, carte du monde grisée en arrière-plan, sidebar services, typographie Quicksand et footer existant.
- Vérification de l'affichage en anglais et en français via les URLs `service=trade`.
- Exécution de `php artisan test` : 2 tests réussis.

## 35. Correction images General Trade B2B

- Remplacement des images initialement choisies pour `General Trade- B2B`, car elles ne correspondaient pas aux captures fournies.
- `public/images/services-trade.jpg` utilise maintenant le visuel PDF avec conteneurs, camions, avion et bateau.
- `public/images/services-trade-support.jpg` utilise maintenant le visuel PDF cargo maritime.
- Conservation des noms de fichiers existants afin de ne pas modifier la structure Blade/CSS.

## 36. Cadrage image cargo General Trade

- Agrandissement du bloc image de contenu `General Trade- B2B`.
- Ajustement du format pour afficher le bateau cargo plus largement, comme dans la capture de référence.
- Adaptation du cadrage responsive tablette pour éviter que le bateau soit coupé.

## 37. Textes et disposition General Trade B2B

- Remplacement des textes de `General Trade- B2B` par les contenus visibles sur la capture fournie.
- Ajout de la section `Product Diversity` avec la liste des secteurs : agriculture, healthcare, hospitality, education et logistics.
- Ajout d'une ligne de séparation avant la section basse, conformément à la disposition de référence.
- Harmonisation de la taille des textes dans la zone `General Trade- B2B` : paragraphes, sous-titres, liste et contact.
- Mise à jour de la traduction française correspondante.

## 38. Ajustement section basse General Trade

- Suppression de la ligne de séparation sur `General Trade- B2B`.
- Descente du bloc `Our OEM Representation Services` pour qu'il commence après le menu latéral `Our services`.
- Nettoyage des règles CSS associées à l'ancienne ligne.

## 39. Alignement gauche General Trade

- Alignement à gauche du bloc bas `Our OEM Representation Services` sur desktop.
- Le bloc reste verticalement après le menu `Our services`, mais démarre maintenant au même niveau horizontal que la zone latérale.
- Conservation d'un alignement normal sur les largeurs tablette et mobile.

## 40. Page Consulting and Advisory Services

- Ajout de la variante `/services?service=consulting`.
- Ajout du service `consulting` dans la validation de route.
- Activation du lien `Consulting and advisory services` dans le menu latéral et dans le footer.
- Utilisation des images extraites du PDF :

```text
public/images/services-consulting-hero.jpg
public/images/services-consulting-side.jpg
```

- Le hero utilise le visuel équipe en réunion, conforme à la capture.
- L'image latérale sous `Our services` utilise la conseillère avec casque, conforme à la capture.
- Ajout des textes anglais et français dans les fichiers de langue.
- Ajout d'un style dédié avec taille de texte uniforme pour les paragraphes, sous-titres, points et contact de la page consulting.
- Vérification de l'affichage en anglais et en français, puis exécution de `php artisan test` : 2 tests réussis.

## 41. Page Supply Chain Management Services

- Ajout de la variante `/services?service=supply`.
- Ajout du service `supply` dans la validation de route.
- Activation du lien `Supply Chain Management Services` dans le menu latéral et dans le footer.
- Utilisation des images extraites du PDF :

```text
public/images/services-supply-hero.jpg
public/images/services-supply-side.jpg
```

- Le hero utilise le visuel transport multimodal avec camion, avion, train, bateau et conteneurs.
- L'image de contenu utilise le visuel opératrice en entrepôt avec cartons.
- Ajout des textes anglais et français pour la gestion de la chaîne d'approvisionnement.
- Ajout d'un style dédié avec taille de texte uniforme pour les paragraphes, sous-titres, points et contact de la page supply chain.
- Vérification de l'affichage en anglais et en français, puis exécution de `php artisan test` : 2 tests réussis.
