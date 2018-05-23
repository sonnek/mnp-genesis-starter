# MNPdev Genesis Starter
This is the MNPdev house starter template for Genesis child themes. This repo comes preinstalled with 2 different paths:
- [CSS](#css-path)
- [Preprocessor](#preprocessor-path)  (Both LESS and Sass are included.)

___

## CSS Path
If you do not want to use LESS or Sass, follow this installation process.

#### Cloning the Repo
If you don't have [Git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git) installed, you can download the [ZIP file](https://github.com/milesnorth/mnp-genesis-starter/archive/master.zip) and drop it into your `wp-content/themes` folder.

Otherwise, you can istall the theme using Git.

1. Start by navigating to your `wp-content/themes` folder.
2. Once you're there, open your terminal in the current folder.
3. From the terminal, type the following command to clone: `git clone git@github.com:https://github.com/milesnorth/mnp-genesis-starter.git`

#### Development Notes
Now that you have the repo cloned or installed, you can start development.
You won't need the styles folder, so it's a good idea to tidy up and delete it before you begin working on your new theme.

___

## Preprocessor Path
If you want to speed up your development, you can use either LESS or Sass.

#### Requirements
You will need the following applications installed before using a preprocessor.
- [Git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)
- [Node.js](http://nodejs.org/)
- [GruntJS](http://gruntjs.com/) - _A JavaScript Task Runner_
- [Sass](http://sass-lang.com/install) - _If you're using Sass/Scss_


#### Step 1: Install Node.js
If you're not sure whether you have Node.js installed, you can check by opening up the terminal and running `node -v`. If it's installed, a version number will display and you can skip to step [#2](#step-2-installing-gruntjs).

1. Install the latest version of [Node.js](https://nodejs.org/en/).
2. Once installed, run `node -v` to verify that you have the latest version installed.
3. Go to step [#2](#step-2-installing-gruntjs).

#### Step 2: Install GruntJS
If you're not sure whether you have GruntJS installed, you can check by opening up the terminal and running `grunt -v`. If it's installed, a version number will display and you can skip to step [#3](#step-3-installing-git).

1. Now install GruntJS by running the following command: `npm install -g grunt-cli`.
2. Go to step [#3](#step-3-installing-git).

#### Step 3: Installing Git
Again, you can check to see if you have Git installed by running `git -v` in the terminal. If you already have it installed, skip to step [#4](#step-4-cloning-repo).

If you don't have Git installed, you can follow the Git setup instructions in the [Git documentation](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git) and then proceed to step [#4](#step-4-cloning-repo).

#### Step 4: Cloning Repo
1. With git installed, navigate to `wp-content/themes` folder.
2. Clone the repo using the following command: `git clone git@github.com:https://github.com/milesnorth/mnp-genesis-starter.git`.
3. Now with the repo cloned, you can navigate to it by running `cd mnp-genesis-starter`.
3. Go to step [#5](#step-5-installing-packages).

#### Step 5: Installing Packages
1. From the theme current directory, install node packages with the following command: `npm install`.
2. Go to step [#6](#step-6-running-grunt).

#### Step 6: Running Grunt
1. Cd into the grunt directory (if you're still in the theme directory, use `cd grunt` to navigate to the grunt directory, and run the command `grunt`.
2. Once Grunt has been initiated, you can save your LESS or Sass styles and they will compile to style.css.

#### Development Notes
Stick to either LESS or Sass in your development. Changes made in one modality will overwrite the other.

___

## Copyright & License
Copyright 2018 Miles North Productions. Code released under [GNU license v3](http://www.gnu.org/licenses/gpl-3.0.html).
