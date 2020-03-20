export default{
    template: `
    <div class="pageHome">
    <section class="secAbout">
        <h2>About Me</h2>
        <div class="strengths">
            <div class="strength s1">
                <i class="fas fa-bolt"></i>
                <h4>Speed</h4>
                <p>Writing responsive, reliable code with blistering speed and efficiency</p>
            </div>
            
            <div class="strength s2">
                <i class="fas fa-bug"></i>
                <h4>Debugging</h4>
                <p>Googling error codes is my secret passion! shh...</p>
            </div>

            <div class="strength s3">
                <i class="fas fa-globe-europe"></i>
                <h4>Versitile</h4>
                <p>Adaptable to different languages and plugins so team work is a breeze</p>
            </div>
        </div>

        <div class="vertDiv"></div>
    <div class="malekSkill">
        <h2 class="who">Who is this guy?</h2>
        <div class="malekf">
            <img class="portrait" src="images/me.jpg" alt="Portrait of Malek Farag">
            <div class="aboutDesc">
                <p class="title">Malek Farag</p>
                <p class="desc">Passionate web developer and designer from London, Ontario. Creating fast, reliable applications for real people.</p>
            </div>
        </div>

        <div class="skills">
            <div class="skill">
                <p class="name">HTML5</p>
                <div class="fill 95"></div>
            </div>
            <div class="skill">
                <p class="name">SASS</p>
                <div class="fill 95"></div>
            </div>
            <div class="skill">
                <p class="name">JavaScript</p>
                <div class="fill 90"></div>
            </div>
            <div class="skill">
                <p class="name">Vue.JS</p>
                <div class="fill 80"></div>
            </div>
            <div class="skill">
                <p class="name">Node.JS</p>
                <div class="fill 90"></div>
            </div>
            <div class="skill">
                <p class="name">HBS</p>
                <div class="fill 85"></div>
            </div>
            <div class="skill">
                <p class="name">PHP</p>
                <div class="fill 90"></div>
            </div>
            <div class="skill">
                <p class="name">UI Design</p>
                <div class="fill 85"></div>
            </div>
            <div class="skill">
                <p class="name">Photoshop</p>
                <div class="fill 75"></div>
            </div>
            <div class="skill">
                <p class="name">After Effects</p>
                <div class="fill 90"></div>
            </div>
            <div class="skill">
                <p class="name">3D</p>
                <div class="fill 65"></div>
            </div>
        </div>
    </div>
        

        
    </section>

    <section class="secPortfolio">
        <h2>Featured Project</h2>

        
        <div class="projView">
            <div class="projInfo proj1 view">
                <h3 class="projTitle">Codae Site</h3>
                    <p class="projDesc">shasbdhjasbd bhasdjhasbd asjh dbash dbhsahdb ashbd bas dhgbasvdj </p>
                    <div class="parMocks">
                        
                            <img src="images/portfolio/" alt="Cordae album review site mockup" class="projMockups openBox">
                        
                    </div>
                    
                    <div class="appsUsed">
                        
                            <label class="app">Apps</label>
                        
                    </div>
                    <a class="more" href="port">More Info</a>
            </div>
        </div>

        <div class="allProjsWrap">
            <h2 class="allP">All Projects</h2>
            <div class="allProjs">
            <div class="proj">
                <h3 class="projTitle">Project Title</h3>
                <img class="projMock" src="images/portfolio/mock2.jpg" alt="mockup">
                <a class="more" href="#">More</a>
            </div>
        </div>
        </div>
        
    </section>

    <section class="secContact">
        <h2>Contact</h2>
        <form action="submit" method="post">
            <input type="text" placeholder="Name" id='name' required>
            <input type="email" id='email' placeholder="Email" required>
            <input id='subject' type="text" placeholder='Subject' required>
            <textarea id='message' placeholder="Message" required></textarea>
            <input type="submit" value="send" class="send">
        </form>
    </section>
</div>
    `
    // ,

    // data: function(){
    //     featuredProj:{
    //         c
    //     }
    // }


}