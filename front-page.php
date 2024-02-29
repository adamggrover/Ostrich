<?php get_header(); ?>

<section id="hero">
    <div class="content-container">
        <h2 class="text-6xl font-bold w-2/5 my-24">Providing you with solutions</h2>
        <form action="">
            <input type="text" placeholder="Job title or keyword">
            <input type="text" placeholder="Choose location">
            <button>Search</button>
        </form>
        
    </div>
    <div class="px-24 mx-auto">
        <img src="https://picsum.photos/2000/600" alt="" class="mx-auto">

    </div>
   
</section>

<section id="help" class="bg-secondary py-32">
    <div  class="content-container">
        <h3 class="section-heading">How can we help you?</h3>
        <div class="columns-1 md:columns-3">
            <div class="link-card">
                <h4>Looking to hire?</h4>
                <p>Get the best technical talent for your team</p>
            </div>
            <div class="link-card">
                <h4>Looking to hire?</h4>
                <p>Get the best technical talent for your team</p>
            </div>
            <div class="link-card">
                <h4>Looking to hire?</h4>
                <p>Get the best technical talent for your team</p>
            </div>
        </div>
    </div>
</section>

<section id="about" class="bg-secondary py-32">
    <div class="content-container">
        <h3 class="section-heading">Who we are</h3>
        <h4 class="font-semibold text-2xl">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero, officia!</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et aliquid nobis velit architecto in quasi consequuntur illum, delectus repellat est explicabo odio ab aspernatur eum corporis. Sapiente, consectetur?</p>
        <a href="" class="text-accent">Find out more</a>
    </div>
</section>

<section id="news" class="bg-secondary">
    <div class="content-container">
        <h3 class="section-heading">News</h3>
        <p>Keep up-to-date with the latest recruitment news</p>
        <?php get_template_part( 'loop', 'index' ); ?>    

        <div>
            <button>View all news</button>
            <div>
                <button>Prev</button>
                <button>Next</button>
            </div>
        </div>

    </div>
    
</section>

<section id="contact">
    <div class="content-container">
    <h3 class="section-heading">Contact</h3>
    <div class="flex">
        <div class="w-1/2">
            <p>Want to work with us or have a question you need answered?</p>
            <h5>Send us an email</h5>
            <h5>Give us a ring</h5>
            <h5>Drop in</h5>
            <div class="columns-2">
                <div>
                    <p>Cardiff</p>
                    <p>Ground Floor</p>
                    <p>21 A specific road</p>
                    <p>Cardiff</p>
                    <p>CF21 0AB</p>
                </div>
                <div>
                    <p>Cardiff</p>
                    <p>Ground Floor</p>
                    <p>21 A specific road</p>
                    <p>Cardiff</p>
                    <p>CF21 0AB</p>
                </div>
            </div>
        </div>
        <div class="w-1/2">
            <form action="" class="flex flex-col"   >
                <input type="text" placeholder="Full Name">
                <input type="text" placeholder="Email address">
                <input type="text" placeholder="Message">
                <button aria-label="submit">Submit</button>
            </form>
        </div>

    </div>

    </div>
</section>



<?php get_footer(); ?>