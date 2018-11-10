@extends('layout.main') 

@section('index-nav') 
   
@stop

@section('index-slider') 
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" style="height: auto">
            <div class="carousel-item active" >
                <img class="d-block w-100 img-fluid" src="https://images.pexels.com/photos/22346/pexels-photo.jpg?auto=compress&cs=tinysrgb&h=350 slide" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="https://images.pexels.com/photos/860564/pexels-photo-860564.jpeg?auto=compress&cs=tinysrgb&h=350 slide" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="https://images.pexels.com/photos/370205/countryside-tree-landscape-sunlight-370205.jpeg?auto=compress&cs=tinysrgb&h=350 slide" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>  
@stop
        
@section('index-content')  
    <h1>Eigth ways to improve your study habits</h1>
    <p></p>
    <dl>
        <dt>1. Set goals</dt>
        <dd>
            If you’ve read our other study tips and tricks, you’ve probably heard us say this more than once but <u>setting goals for yourself</u> is one of the easiest ways to increase your motivation. Setting both long- and short-term goals will help you to keep the end in sight as you slog through 15 chapters of organic chemistry. Just be sure that your goals are both realistic and challenging so that you’re meeting them and getting the full benefit of them!</dd>
        <dd> 
            Pro tip: Posting your goals where you will see them every day is a great way to stay mindful of them and your progress. I always made myself a sign to hang on the shelf above my desk with my goal GPA for the semester. That way I had a physical reminder to look at every day, and I got to craft something fun!
        </dd>
        
        <dt>2. Create your perfect study space</dt>
        <dd>
            It is amazing what the environment around you can do to for your mental state. Organizing your desk so that everything you need is within reach is a great way to get a head start on your study session. If you’re <u>studying in your room,</u> pick up a little! The act of picking up your daily clutter (we all have at least a little) will help you to declutter your mind a be prepared to crack the books.
        </dd>
        
        <dt>3. Set a schedule</dt>
        <dd>
            <u>Setting a time of the week or the day to study</u> is a great way to keep procrastination out of your daily life. By setting aside a certain of time, you will not only insure that you have enough time to complete your assignments and study for your exams, you’ll also begin to make studying a normal part of your daily routine.
        </dd>
        
        <dt>4. Just DO it!</dt>
        <dd>
            The hardest part of pretty much anything is starting. But no matter how much you hate math or history or doing the dishes, it’s usually not so bad once you’ve gotten started. Set yourself a goal of studying for a solid 15-20 minutes without a break and see how you feel when the time is up. Chances are, you’ll be able to commit to another 15-20 minutes.
        </dd>
        
        <dt>5. Pump up the jam</dt>
        <dd>
            A pretty common way to get motivated for the gym is to listen to music that motivates you. But, did you know that it works the same way for studying? Put on something you know pumps you up and let it fuel your mindset before you start your study session. I like to listen to <u>ACDC “Back In Black”</u> or <u>Walk Off the Earth “Rule The World”</u>  before switching to my favorite focus playlist.
        </dd>
        <dd>
            Take a look at our post on <u>how music can aid your study session</u> for more awesome study jams!
        </dd>
        
        <dt>6. Give yourself a pep-talk</dt>
        <dd>
            This may make you feel silly at first but looking in a mirror and talking yourself up can actually help you to feel motivated to complete whatever tasks you’ve got on your to do list. Try starting with telling yourself your goal for this study session, then work your way up to your long term goals. While you’re at it, throw in some things that you think are great about yourself like your amazing taste in sneakers or your killer baking skills. There’s nothing better than a confidence boost from a compliment to help you get into the right headspace.
        </dd>
        
        <dt>7. Reward yourself</dt>
        <dd>
            Each time you check off one of your study goals or make a breakthrough on a tough subject, reward yourself! Get yourself anything from a doughnut to a sweet new longboard depending on the goal. It’s depressing to work really hard on something and feel like no one knows or appreciates all of the hard work you’re doing. So rewarding yourself with a dinner out or a trip to the five dollar movie bin is a great way to show yourself some love.
        </dd>
        
        <dt>8. Write down how you feel after</dt>
        <dd>
            This may sound strange, but you know how great you feel when you hit a big goal or finally finish that big paper? Writing down how good you feel after completing a tough task can work as great motivation the next time you’re having trouble getting started. Keep a notebook in your backpack and write down your triumphs. That way, each time you need a little extra push, you’ve got a whole book full of success!
        </dd>
      
    </dl>
      
@stop

@section('index-form') 
    <form method="post" action="">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="" >
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-lg" value="Submit">
        </div>
    </form> 
@stop


@section('index-column-3')  

    <h1>News and Updates</h1>  
<div class="row">
    <div class="col-md-4">
        <img src="https://images.pexels.com/photos/370205/countryside-tree-landscape-sunlight-370205.jpeg?auto=compress&cs=tinysrgb&h=350" class="img-thumbnail img-fluid" alt="...">
    </div>
    <div class="col-md-4">
       <img src="https://images.pexels.com/photos/370205/countryside-tree-landscape-sunlight-370205.jpeg?auto=compress&cs=tinysrgb&h=350" class="img-thumbnail img-fluid" alt="...">
    </div>
    <div class="col-md-4">
        <img src="https://images.pexels.com/photos/370205/countryside-tree-landscape-sunlight-370205.jpeg?auto=compress&cs=tinysrgb&h=350" class="img-thumbnail img-fluid" alt="...">
    </div> 
</div>
<br>
<div class="row">
    <div class="col-md-4">
        <img src="https://images.pexels.com/photos/370205/countryside-tree-landscape-sunlight-370205.jpeg?auto=compress&cs=tinysrgb&h=350" class="img-thumbnail img-fluid" alt="...">
    </div>
    <div class="col-md-4">
       <img src="https://images.pexels.com/photos/370205/countryside-tree-landscape-sunlight-370205.jpeg?auto=compress&cs=tinysrgb&h=350" class="img-thumbnail img-fluid" alt="...">
    </div>
    <div class="col-md-4">
        <img src="https://images.pexels.com/photos/370205/countryside-tree-landscape-sunlight-370205.jpeg?auto=compress&cs=tinysrgb&h=350" class="img-thumbnail img-fluid" alt="...">
    </div> 
</div>
@stop

 
