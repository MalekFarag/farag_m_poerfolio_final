# Malek Farag's Portfolio Site

https://farag-m-portfolio.herokuapp.com/

### Portfolio site showcasing Malek Farag's past work in web design, development and motion design.


### Built with 

Node.js, HBS, SASS, JavaScript, HTML5, MySQL + ClearDB


### Designed assets with

Photosop, Illustrator, Premiere Pro, After Effects, C4D



##### Follow steps below to run locally.

1. Install vidusal studio code:  https://code.visualstudio.com/

2. Open project in VS Code.

3. Install packages:

`npm install cookie-parser debug express gsap hbs http-errors morgan mysql waypoints`

4. Change config file to run on local host. Remove old code and add code below.
*Make sure to choose port number accordingly*

`const config = {

    host: 'localhost',
    
    port: 8889, // windows: 3306 // MAC: 8889 or 8888 // *Change accordingly
    
    uname: 'root',
    
    pname: 'root', // windows: *leave blank* // MAC: root // *Change accordingly
    
    db: 'db_malekf_site'
    
 }
 
module.exports = config;`

5. Download + import database (utils>db_malekf_site) into localhost phpmyadmin.

6. Start application on localhost. `npm start`
