# mod_custom_blankghsvs. Joomla site module.

## DE
- "Benutzerdefiniertes" Modul ohne Editor von GHSVS
- Bietet eine einfache Textarea für die Texteingabe anstelle eines Editors. <strong style='color:red'>Beachte: Dieses Modul verwendet keine Textfilterung von Joomla. Jeder, der Zugriff auf dieses Modul hat, kann alles eingeben.</strong>

## EN
- Custom module without editor by GHSVS
- Provides a simple textarea for text input instead of an editor. <strong style='color:red'>Be aware: This module doesn't use any text filtering from Joomla.</strong>

## Releases/Downloads
- https://github.com/GHSVS-de/mod_custom_blankghsvs/releases

-----------------------------------------------------

# My personal build procedure (WSL 1, Debian, Win 10)

**@since v2022.06.14: Build procedure uses local repo fork of https://github.com/GHSVS-de/buildKramGhsvs**

- Prepare/adapt `./package.json`.
- `cd /mnt/z/git-kram/mod_custom_blankghsvs`

## node/npm updates/installation
- `npm run updateCheck` or (faster) `npm outdated`
- `npm run update` (if needed) or (faster) `npm update --save-dev`
- `npm install` (if needed)

## Build installable ZIP package
- `node build.js`
- New, installable ZIP is in `./dist` afterwards.
- All packed files for this ZIP can be seen in `./package`. **But only if you disable deletion of this folder at the end of `build.js`**.s

### For Joomla update and changelog server
- Create new release with new tag.
  - See release description in `dist/release_no-changelog.txt`.
- Extracts(!) of the update XML for update servers are in `./dist` as well. Copy/paste and necessary additions.
