# MNPdev Genesis Starter
This is the MNPdev house starter template for Genesis child themes. This repo comes preinstalled with 2 different paths...
- [CSS](#css-path)
- [Preprocessor](#preprocessor-path)

## CSS Path
If you are not going to be using preprocessors, this is the path for you.

#### Step 1: Cloning the Repo
The first step to getting started is cloning this repo. If you don't have [Git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git) installed, you can download the [ZIP file](https://github.com/elegantthemes/mnp-genesis-starter/archive/master.zip) and drop it into your `wp-content/themes` folder.

1. Start by navigating to your `wp-content/themes` folder.
2. Once you're there, open `terminal` in the current folder.
3. Now with `terminal`, use the following commands to clone: `git clone git@github.com:https://github.com/milesnorth/mnp-genesis-starter.git`

#### Step 2: Development
Now that you have the repo cloned or installed, you can start development.

1. If you haven't already, navigate to your `mnp-genesis-starter folder`.
2. Open up `style.css` in your favorite editor and code away!


## Preprocessor Path
If you want to speed up your development, you can use either LESS or Sass.

#### Requirements
You will need the following applications installed before using a preprocessor.
- [Git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)
- [Node.js](http://nodejs.org/)
- [GruntJS](http://gruntjs.com/) - _A JavaScript Task Runner_
- [Sass](http://sass-lang.com/install) - _If you're using Sass/Scss_


#### Step 1: Install Node.js
If you're not sure whether you have Node.js installed, you can check by opening up the terminal and typing in `node -v`. If it's installed, a version number will display and you can skip to step [#2](#step-2-installing-gruntjs).

1. Go to `https://nodejs.org/en/` and install the latest version of Node.js
2. Now that it's installed, run `node -v` to verify that you have the latest version installed.
3. Go to step [#2](#step-2-installing-gruntjs).

-

#### Step 2: Install GruntJS
If you're not sure whether you have GruntJS installed, you can check by opening up the terminal and typing in `grunt -v`. If it's installed, a version number will display and you can skip to step [#3](#step-3-installing-git).

1. Now install GruntJS by running the following command: `npm install -g grunt-cli`.
2. Go to step [#3](#step-3-installing-git).

-

#### Step 3: Installing Git
Again, you can check to see if you have Git installed by typing `git -v` in the terminal. If you already have it installed, skip to step [#4](#step-4-cloning-repo).

1. Go to `https://git-scm.com/book/en/v2/Getting-Started-Installing-Git` and follow the to installing git for the correct machine.
2. Go to step [#4](#step-4-cloning-repo).

-

#### Step 4: Cloning Repo
1. With git installed, navigate to `wp-content/themes` folder.
2. Clone the repo using the following command: `git clone git@github.com:https://github.com/milesnorth/mnp-genesis-starter.git`.
3. Now with the repo cloned, you can navigate to it by typing in `cd ` and dragging the starter theme folder into your terminal.
3. Go to step [#5](#step-5-installing-packages).

-

#### Step 5: Installing Packages
1. From current directory, install node packages with the following command: `npm install`.
2. Go to step [#6](#step-6-running-grunt).

-

#### Step 6: Running Grunt
1. Cd into the grunt directory, and run the following command: `grunt`.
2. Once grunt has been initiated, you can save your LESS or Sass styles and they will compile to style.css.

## Copyright & License
Copyright 2018 Miles North Productions. Code released under [GNU license v3](http://www.gnu.org/licenses/gpl-3.0.html).
