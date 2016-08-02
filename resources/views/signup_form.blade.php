<style>
    select{
        display: block;
        height: 36px;
        left: 0;
        line-height: 36px;
        outline: none;
        overflow: hidden;
        text-indent: 10px;
        top: 0;
        width: 100%;
    }
</style>
    
@if (Session::has('message'))
   <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
{!! Form::open(
array(
    'url' => 'users',
    'novalidate' => 'novalidate',
    'files' => true)) !!}

<div class="row">
    <h3>Profile Picture:</h3>
    <div class="upload-profile">
        <div class="image-border">
            {!! HTML::image('images/profile-img.jpg', 'Profile Picture', array('id' => 'blah')) !!}
        </div>
        <div class="fileUpload button">
            <span>Upload</span>
            <input id="uploadBtn" type="file" class="upload imgInp" name="photo"/>
        </div>
    </div>

    <div class="profile-img-styling">
        <div class="select-type">Select Type: <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit</small></div>
        <div class="row">
            <div class="three-blocks">
                <div class="images-style-bg full-radius">
                    {!! HTML::image('images/profile-img.jpg') !!}
                    <div class="profile-btm-shedow"></div>
                </div>
                <div class="checkbox-bg">
                    <input type="radio" id="radius-full" name="photoType" value="0">
                    <label for="radius-full"><span></span></label>
                </div>
            </div>

            <div class="three-blocks">
                <div class="images-style-bg radius-six">
                    {!! HTML::image('images/profile-img.jpg') !!}
                    <div class="profile-btm-shedow"></div>
                </div>
                <div class="checkbox-bg">
                    <input type="radio" id="radius-six" name="photoType" value="1">
                    <label for="radius-six"><span></span></label>
                </div>
            </div>

            <div class="three-blocks">
                <div class="images-style-bg">
                    {!! HTML::image('images/profile-img.jpg') !!}
                    <div class="profile-btm-shedow"></div>
                </div>
                <div class="checkbox-bg">
                    <input type="radio" id="corner" name="photoType" value="2">
                    <label for="corner"><span></span></label>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="form-row single-line-label">

    <div class="four-cols">
        <label>Username*</label>
        <input type="text"  name="username" id="username_s" placeholder="Username"  />
        <label for="corner"><span></span></label>
    </div>

    <div class="four-cols">
        <label>Email*</label>
        <input type="text"  name="email" id="email"placeholder="Email" autocomplete="off" />
        <label for="corner"><span></span><span class="error" id="emailError"></span></label>
    </div>
    <div class="four-cols">
        <label>Password*</label>
        <input type="password" name="password" id="password" placeholder="Password"  />
        <label for="corner"><span></span></label>
    </div>

    <div class="four-cols">
        <label>Confirm Password*</label>
        <input type="password" name="password_repeat" id="password_repeat" placeholder="Confirm Password"  />
        <label for="corner"><span class="error" id="passwordError"></span></label>
    </div>
</div>
<div class="form-row single-line-label">
    <div class="three-cols">
        <label>First Name</label>
        <input type="text" name="firstName" id="firstName" placeholder="First Name"  />
        <label for="corner"><span class="error" id="firstName"></span></label>
    </div>

    <div class="three-cols">
        <label>Last Name</label>
        <input type="text" name="lastName" id="lastName" placeholder="Last Name"  />
        <label for="corner"><span class="error" id="lastName"></span></label>
    </div>

    

    <div class="three-cols">
        <label>What's your relationship status? </label>
        <select name="relationshipStatus" class = "form-control" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="In a relationship, but not working">In a relationship, but not working</option>
            <option value="Not sure">Not sure</option>
            <option value="Single">Single</option>
            <option value="We are friends">We are friends</option>
            <option value="I'm in a serious relationship">I'm in a serious relationship</option>
            <option value="Sex Only">Sex Only</option>
        </select>
    </div>
</div>
<div class="form-row single-line-label">

    <div class="three-cols">
        <label>Year</label>
        <select name = "birthYear" id="years"></select>
    </div>


      <div class="three-cols">
        <label>Month</label>
        <select name = "birthMonth" id="months"></select>
    </div>


     <div class="three-cols">
        <label>Day</label>
        <select name = "birthDay" id="days"></select>
    </div>

  
   

</div>

<div class="form-row single-line-label">
    <div class="three-cols">
        <label>Your Gender:</label>
        <select name="gender" id="gender">
            <option value="1">--Select--</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
    </div>
    <div class="three-cols">
        <label>Do you have Tattoos?</label>
        <select name="tatoos" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            <option value="Some">Some</option>
        </select>
    </div>

    <div class="three-cols">
        <label>Does you want kids? </label>
        <select name="wantKids" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            <option value="Maybe">Maybe</option>
            <option value="Don't Know">Don't Know</option>
        </select>
    </div>
</div>
<div class="form-row single-line-label">


    <div class="three-cols">
        <label>Your Relatioship goal:</label>
        <select name="relationshipGoal" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="long term relationship">Long Term Relationship</option>
            <option value="short term relationship">Short Term Relationship</option>
            <option value="to get married">To Get Married</option>
            <option value="casual dating">Casual Dating</option>
        </select>
    </div>
    <div class="three-cols">
        <label>Your Occupation:</label>
        <select name="occupation" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="2">21</option>
            <option value="2">22</option>
            <option value="2">23</option>
            <option value="2">24</option>
        </select>
    </div>

    <div class="three-cols">
        <label>Your Income:</label>
        <select name="income" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="Less than $5000">Less than $5000</option>
            <option value="1-5000">$1-$5000</option>
            <option value="5000-10000">$5000-$10,000</option>
            <option value="10000-30000">$10,000-$30,000</option>
            <option value="30000-50000">$30,000-$50,000</option>
            <option value="50000-100000">$50,000-$100,000</option>
            <option value="100000-300000">$100,000-$300,000</option>
            <option value="300000-1000000">$300,000-$1,000,000</option>
            <option value="N/A">N/A</option>



        </select>
    </div>

</div>

<div class="form-row two-cols">
    <div class="left">
        <label>Tell us more about your job and your job schedule:</label>
        <textarea name = "jobAndJobSchedule"></textarea>
        <div class="textarea-detail">
            <p>You have</p> <input type="text" placeholder="300">
            <div class="max-cahracter">(maximum characters:300) <br> Characters left.
            </div>
        </div>
    </div>
    <div class="right">
        <p>Your social situation:</p>
        <div class="checkbox-container">
            <div class="cell">
                <input type="checkbox" id="check-one" name="yourSocialSituation[]" value= "I'm new to the area">
                <label for="check-one"><span></span> I'm new to the area</label>
            </div>

            <div class="cell">
                <input type="checkbox" id="check-two" name="yourSocialSituation[]" value= "I don't want to settle for second best">
                <label for="check-two"><span></span>I don't want to settle for second best</label>
            </div>

            <div class="cell">
                <input type="checkbox" id="check-three" name="yourSocialSituation[]" value= "I don't feel comfortable asking peopleout">
                <label for="check-three"><span></span>I don't feel comfortable asking peopleout</label>
            </div>

            <div class="cell">
                <input type="checkbox" id="check-four" name="yourSocialSituation[]" value= "Safety concerns me">
                <label for="check-four"><span></span>Safety concerns me</label>
            </div>

            <div class="cell">
                <input type="checkbox" id="check-five" name="yourSocialSituation[]" value= "I'm really busy with work">
                <label for="check-five"><span></span>I'm really busy with work</label>
            </div>

            <div class="cell">
                <input type="checkbox" id="check-six" name="yourSocialSituation[]" value= "I'm tired of people playing games">
                <label for="check-six"><span></span>I'm tired of people playing games</label>
            </div>

            <div class="cell">
                <input type="checkbox" id="check-seven" name="yourSocialSituation[]" value= "I meet a lot of people, just not the right type">
                <label for="check-seven"><span></span>I meet a lot of people, just not the right type</label>
            </div>

            <div class="cell">
                <input type="checkbox" id="check-eight" name="yourSocialSituation[]" value= "I'm a single parent">
                <label for="check-eight"><span></span>I'm a single parent </label>
            </div>

            <div class="cell">
                <input type="checkbox" id="check-nine" name="yourSocialSituation[]" value= "I don't like the bar">
                <label for="check-nine"><span></span>I don't like the bar</label>
            </div>

            <div class="cell">
                <input type="checkbox" id="check-ten" name="yourSocialSituation[]" value= "I'm very selective of whom I'll date">
                <label for="check-ten"><span></span>I'm very selective of whom I'll date </label>
            </div>
        </div>
    </div>
</div>


<div class="form-row single-line-label ">
    <div class="three-cols">
        <label>Do you have children?</label>
        <select name="haveChildren" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>
    <div class="three-cols">
        <label>If You have many?</label>
        <select name="howMany" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="2">2</option>
            <option value="2">3</option>
            <option value="2">4</option>
            <option value="2">5</option>
            <option value="2">6</option>
            <option value="2">7</option>

        </select>
    </div>

    <div class="three-cols">
        <label>Do you own a car?</label>
        <select name="doYouOwnACar" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>

</div>

<div class="form-row four-col-row">
    <div class="four-cols">
        <label>Are you on any medication?</label>
        <select name="areYouOnAnyMedication" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>
    <div class="four-cols">
        <label>Would birth Father Is:</label>
        <select name="fatherBorn" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
        </select>
    </div>
    <div class="four-cols">


    <label>Would birth Mother Is:</label>
        <select name="motherBorn" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
        </select>

    </div>
    <div class="four-cols">
        <label>How ambitious are you?</label>
        <select name="howAmbitiousAreYou" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="Very Important">Very Important</option>
            <option value="Important">Important</option>
            <option value="Somewhat Important">Somewhat Important</option>

        </select>
    </div>

    <div class="four-cols">
        <label>What is the longest relationship you have  been in?:</label>
        <select name="whatIsTheLongestRelationshipYouHaveBeenIn" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="1 year">1 Year</option>
            <option value="2 years">2 Years</option>
            <option value="3-6 years">3-6 Years</option>
            <option value="longer">Longer</option>
        </select>
    </div>


    <div class="four-cols">
        <label>Your birth father and mother are:</label>
        <select name="yourBirthFatherAndMotherAre" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="2">21</option>
            <option value="2">22</option>
            <option value="2">23</option>
            <option value="2">24</option>
        </select>
    </div>

    <div class="four-cols">
        <label>How important in a relationship is my partner's dependability?</label>
        <select name="partnerDependability" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="Very Important">Very Important</option>
            <option value="Somewhat Important">Somewhat Important</option>
            <option value="What every happen">What every happen</option>
            <option value="Unsure">Unsure</option>
            <option value="2">23</option>
            <option value="2">24</option>
        </select>
    </div>


    <div class="four-cols">
        <label>How important in a relationship is sexual compatibility</label>
        <select name="sexualCompatibility" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="Sometime">Sometime</option>
            <option value="What is that">What is that</option>
            <option value="Very Important">Very Important</option>
            <option value="Important">Important</option>
        </select>
    </div>

    <div class="four-cols">
        <label>How important in a relationship is the friendship between partners?</label>
        <select name="friendshipBetweenPartners" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="Very Important">Very Important</option>
            <option value="Important">Important</option>
            <option value="Somewhat Important">Somewhat Important</option>
        </select>
    </div>

    <div class="four-cols">
        <label>Do you do drugs?</label>
        <select name="drugs" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            <option value="Sometime">Sometime</option>
        </select>
    </div>


    <div class="four-cols">
        <label>What's your hair color?</label>
        <select name="hairColor" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="Light Ash Blonde">Light Ash Blonde</option>
            <option value="Light Blonde">Light Blonde</option>
            <option value="Light Golden Blonde">Light Golden Blonde</option>
            <option value="Beeline Honey">Beeline Honey</option>
            <option value="Medium Champagne">Medium Champagne</option>
            <option value="Butterscotch">Butterscotch</option>
            <option value="Light Cool Brown">Light Cool Brown</option>
            <option value="Light Brown">Light Brown</option>
            <option value="Light Golden Brown">Light Golden Brown</option>
            <option value="Chocolate Brown">Chocolate Brown</option>
            <option value="Dark Golden Brown">Dark Golden Brown</option>
            <option value="Medium Ash Brown">Medium Ash Brown</option>
            <option value="Reddish Blonde">Reddish Blonde</option>
            <option value="Light Auburn">Light Auburn</option>
            <option value="Medium Auburn">Medium Auburn</option>
            <option value="Red Hot Cinnamon">Red Hot Cinnamon</option>
            <option value="Expresso">Expresso</option>
            <option value="Jet Black">Jet Black</option>
        </select>
    </div>

    <div class="four-cols">
        <label>What's your hair style</label>
        <select name="hairStyle" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="Long">Long</option>
            <option value="Short">Short</option>
            <option value="Medium">Medium</option>
            <option value="Bob">Bob</option>
            <option value="Shag">Shag</option>
            <option value="Pixie">Pixie</option>
            <option value="Updos">Updos</option>
            <option value="Messy">Messy</option>
            <option value="Layered">Layered</option>
            <option value="Braided">Braided</option>
            <option value="Vintage">Vintage</option>
            <option value="Mohawk">Mohawk</option>
            <option value="Celebrity">Celebrity</option>
            <option value="Ponytails">Ponytails</option>
            <option value="With Bangs">With Bangs</option>
            <option value="Thick">Thick</option>
            <option value="Thin">Thin</option>
            <option value="Natural">Natural</option>
            <option value="Straight">Straight</option>
            <option value="Curly and Wavy">Curly and Wavy</option>
        </select>
    </div>

    <div class="four-cols">
        <label>What's your eye color?</label>
        <select name="eyeColor" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="Hazel Eye ">Hazel Eye </option>
            <option value="Green Eye">Green Eye</option>
            <option value="Gray">Gray</option>
            <option value="Black">Black</option>
            <option value="Brown">Brown</option>
            <option value="Blue">Blue</option>
            <option value="Amber">Amber</option>
            <option value="Chestnut brown">Chestnut brown</option>
        </select>
    </div>

    <div class="four-cols">
        <label>How tall are you?</label>
        <select name="height" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="4ft">4ft</option>
            <option value="5ft">5ft</option>
            <option value="6ft">6ft</option>
            <option value="7ft">7ft</option>
        </select>
    </div>

    <div class="four-cols">
        <label>What's your body type?</label>
        <select name="bodyType" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="Definitive 'Hard Gainer'">Definitive "Hard Gainer"</option>
            <option value="Delicate Built Body">Delicate Built Body </option>
            <option value="Flat Chest">Flat Chest</option>
            <option value="Fragile">Fragile</option>
            <option value="Lean ">Lean </option>
            <option value="Thin">Thin</option>
            <option value="Athletic">Athletic</option>
            <option value="Hard Body">Hard Body</option>
            <option value="Hourglass Shaped">Hourglass Shaped</option>
            <option value="Rectangular Shaped">Rectangular Shaped</option>
            <option value="Mature Muscle">Mature Muscle</option>
            <option value="Muscular Body">Muscular Body</option>
            <option value="Excellent Posture">Excellent Posture</option>
            <option value="Gains Muscle Easily">Gains Muscle Easily</option>
            <option value="Fat">Fat</option>
        </select>
    </div>

    <div class="four-cols">
        <label>What's your zodic sign?</label>
        <select name="zodicSign" id="zodic" >
            <option value="0">--Select--</option>
            <option value="1">
                Aries - The Ram
                March 21 - April 19
                Aries people are creative, adaptive, and insightful.
                "Hard Gainer"
            </option>
            <option value="2">
                Taurus - The Bull
                April 20 - May 20
                Taurus zodiac signs and meanings, like the animal that represents them, is all about strength, stamina and will.
            </option>
            <option value="3">
                Gemini - The Twins
                May 21 - June 20
                Flexibility, balance and adaptability are the keywords for the Gemini.

            </option>

            <option value="4">
                Cancer - The Crab
                June 21 - July 22
                Cancerians love home-life, family and domestic settings. They are traditionalists, and enjoy operating on a fundamental level.

            </option>
            <option value="5">
                Leo - The Lion
                July 23 - August 22
                The zodiac signs and meanings of Leo is about expanse, power and exuberance.

            </option>
            <option value="6">
                Virgo - The Virgin
                August 23 - September22
                Virgo's have keen minds, and are delightful to chat with, often convincing others of outlandish tales with ease and charm.

            </option>
            <option value="7">
                Libra - The Scales
                September 23 - October 22
                As their zodiac signs and meanings would indicate, Libra's are all about balance, justice, equanimity and stability.

            </option>
            <option value="8">
                Scorpio - The Scorpion
                October 23 - November 21
                The Scorpio is often misunderstood.

            </option>
            <option value="9">
                Sagittarius - The Centaur
                November 22 - December 21
                Here we have the philosopher among the zodiac signs and meanings. Like the Scorpio, they have great ability for focus, and can be very intense.

            </option>
            <option value="10">
                Capricorn - The Goat
                December 22 - January 19
                Capricorn's are also philosophical signs and are highly intelligent too.

            </option>
            <option value="11">
                Aquarius - The Water Bearer
                January 20 - February 18
                Often simple and unassuming, the Aquarian goes about accomplishing goals in a quiet, often unorthodox ways

            </option>

            <option value="12">
                Pisces - The Fish
                February 19 - March 20
                Also unassuming, the Pisces zodiac signs and meanings deal with acquiring vast amounts of knowledge,

            </option>
        </select>
    </div>

    <div class="four-cols">
        <label>Do you smoke?</label>
        <select name="smoke" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            <option value="Stopping">Stopping</option>
            <option value="Sometime">Sometime</option>
        </select>
    </div>


    <div class="four-cols">
        <label>Do you drink?</label>
        <select name="drink" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            <option value="Somtime">Sometime</option>
            <option value="casual">Casual</option>
            <option value="with friends">With Friends</option>
        </select>
    </div>

    <div class="four-cols">
        <label>How often do you excercise?</label>
        <select name="excercise" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="regularly">Regularly</option>
            <option value="once a week">Once a week</option>
            <option value="five, three, two time a week">five, three, two time a week</option>
            <option value="What that">What that</option>
        </select>
    </div>


    <div class="four-cols">
        <label>What excercise you do regularly</label>
        <select name="excerciseSchedule" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="chest">chest</option>
            <option value="shoulders">shoulders</option>
            <option value="triceps">triceps</option>
            <option value="hamstrings">hamstrings</option>
            <option value="back">back</option>
            <option value="walking">walking</option>
            <option value="running">running</option>
            <option value="jogging">jogging</option>
            <option value="gym">gym</option>
            <option value="swimming">swimming</option>
        </select>
    </div>

    <div class="four-cols">
        <label>What's your education level?</label>
        <select name="educationLevel" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="Level 4- GED Certificate ">Level 4- GED Certificate </option>
            <option value="Level 5- High School Diploma ">Level 5- High School Diploma </option>
            <option value="Level 6- Bachelor's ">Level 6- Bachelor's </option>
            <option value="Level 7- Masters ">Level 7- Masters </option>
            <option value="Level 7- Masters ">Level 7- Masters </option>
            <option value="Level 8- Doctorate  ">Level 8- Doctorate  </option>
            <option value="Level AA">Level AA</option>
        </select>
    </div>

    <div class="four-cols">
        <label>What laguage do you speak?</label>
        <select name="language" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="Spanish">Spanish</option>
            <option value="English">English</option>
            <option value="Hindi">Hindi</option>
            <option value="Arabic">Arabic</option>
            <option value="Russian">Russian</option>
            <option value="Portuguese">Portuguese</option>
            <option value="Japanese">Japanese</option>
            <option value="German">German</option>
            <option value="French">French</option>

        </select>
    </div>

    <div class="four-cols">
        <label>What is your ethnicity? </label>
        <select name="ethnicity" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="Hispanic or Latino ">Hispanic or Latino </option>
            <option value="Not Hispanic ">Not Hispanic </option>
            <option value="American Indian ">American Indian </option>
            <option value="Alaska Native">Alaska Native</option>
            <option value="Asian">Asian</option>
            <option value="Black">Black </option>
            <option value="African American">African American</option>
            <option value="Native Hawaiian or Other Pacific Islander">Native Hawaiian or Other Pacific Islander</option>
            <option value="White">White</option>
        </select>
    </div>

    <div class="four-cols">
        <label>What are your religiouse you do beliefs? </label>
        <select name="religiousBeliefs" id="relation-ship">
            <option value="1">--Select--</option>
            <option value="Christians">Christians</option>
            <option value="Muslims">Muslims</option>
            <option value="Hindus">Hindus</option>
            <option value="Judaism">Judaism</option>
            <option value="Buddhists">Buddhists</option>
            <option value="Jews">Jews</option>
        </select>
    </div>

</div>

<div class="row">
    <input type="button" value="Next" class="common-red-btn button" id ="first_step"/>

</div>


</div>



</div><!-- /middle -->



<div class="middle inner-middle" id="step2">
    <div class="inner-header like-movie-banner">
        <div class="container">
            <h1><i class="calendar-event-icon">{!! HTML::image('images/like-movies-icon.png') !!}</i>Like Movies</h1>
        </div>
    </div>
    <div class="inner-contendbg">
        <div class="choose-like">
            <h2><span>Choose the kind of movies you like</span></h2>
        </div>
        <div class="choose-movie">
            <ul id="horiz_container_outer">
                <li id="horiz_container_inner">
                    <ul id="horiz_container">

                        <li> {!! HTML::image('images/movie1.png') !!}
                            <div class="movie-title">
                                <input type="checkbox" id="Comedy" name="movies[]" value="Action & Adventure">
                                <label for=""><span></span>Action & Adventure</label>
                            </div>
                        </li>
                        <li>{!! HTML::image('images/movie2.png') !!}
                            <div class="movie-title">
                                <label></label>
                                <input type="checkbox" id="Comedy" name="movies[]" value="Comedy">
                                <label for="Comedy"><span></span>Comedy</label>
                            </div>
                        </li>
                        <li> {!! HTML::image('images/movie3.png') !!}
                            <div class="movie-title">
                                <input type="checkbox" id="Romance" name="movies[]" value="Romance">
                                <label for="Romance"><span></span>Romance</label>
                            </div>
                        </li>
                        <li> {!! HTML::image('images/movie4.png') !!}
                            <div class="movie-title">
                                <input type="checkbox" id="Thriller" name="movies[]" value="Thriller">
                                <label for="Thriller"><span></span>Thriller</label>
                            </div>
                        </li>
                        <li>{!! HTML::image('images/movie5.png') !!}
                            <div class="movie-title">
                                <input type="checkbox" id="Drama" name="movies[]" value="Drama">
                                <label for="Drama"><span></span>Drama</label>
                            </div>
                        </li>
                        <li>{!! HTML::image('images/movie6.png') !!}
                            <div class="movie-title">
                                <input type="checkbox" id="Science Fiction" name="movies[]" value="Science Fiction">
                                <label for="Science Fiction"><span></span>Science Fiction</label>
                            </div>
                        </li>
                        <li>{!! HTML::image('images/movie5.png') !!}
                            <div class="movie-title">
                                <input type="checkbox" id="Action & Adventure" name="movies[]" value="Action & Adventure">
                                <label for="Action & Adventure"><span></span>Action & Adventure</label>
                            </div>
                        </li>
                        <li>{!! HTML::image('images/movie5.png') !!}
                            <div class="movie-title">
                                <input type="checkbox" id="Action & Adventure" name="movies[]" value="Action & Adventure">
                                <label for="Action & Adventure"><span></span>Action & Adventure</label>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <div id="scrollbar">
                <!--<a id="left_scroll" class="mouseover_left" href="#"></a>-->
                <div id="track">
                    <div id="dragBar"></div>
                </div>
                <!--<a id="right_scroll" class="mouseover_right" href="#"></a>--></div>
        </div>
        <div class="choose-like">
            <h2><span>Where would you go if yoU HAD 2 WEEKS OFF?</span></h2>
            <div class="choose-destination">
                <div class="destination-choose">
                    <div class="destination-img"><a href="#">{!! HTML::image('images/destination-img1.png') !!}</a></div>
                    <div class="choose-content">
                        <input type="checkbox" id="Beach" name="travel[]" value="Beach">
                        <label for="Beach"><span></span>Beach</label>
                        <p>Lorem lipsum</p>
                    </div>
                </div>
                <div class="destination-choose">
                    <div class="destination-img"><a href="#">{!! HTML::image('images/destination-img2.png') !!}</a></div>
                    <div class="choose-content">
                        <input type="checkbox" id="Egypt" name="travel[]" value="Egypt">
                        <label for="Egypt"><span></span>Egypt</label>
                        <p>Lorem lipsum</p>
                    </div>
                </div>
                <div class="destination-choose">
                    <div class="destination-img"><a href="#">{!! HTML::image('images/destination-img3.png') !!}</a></div>
                    <div class="choose-content">
                        <input type="checkbox" id="Sermany" name="travel[]" value="Sermany">
                        <label for="Sermany"><span></span>Sermany</label>
                        <p>Lorem lipsum</p>
                    </div>
                </div>
                <div class="destination-choose">
                    <div class="destination-img"><a href="#">{!! HTML::image('images/destination-img4.png') !!}</a></div>
                    <div class="choose-content">
                        <input type="checkbox" id="Greece" name="travel[]" value="Greece">
                        <label for="Greece"><span></span>Greece</label>
                        <p>Lorem lipsum</p>
                    </div>
                </div>
                <div class="destination-choose">
                    <div class="destination-img"><a href="#">{!! HTML::image('images/destination-img5.png') !!}</a></div>
                    <div class="choose-content">
                        <input type="checkbox" id="India" name="travel[]" value="India">
                        <label for="India"><span></span>India</label>
                        <p>Lorem lipsum</p>
                    </div>
                </div>
                <div class="destination-choose">
                    <div class="destination-img"><a href="#">{!! HTML::image('images/destination-img6.png') !!}</a></div>
                    <div class="choose-content">
                        <input type="checkbox" id="New York" name="travel[]" value="New York">
                        <label for="New York"><span></span>New York</label>
                        <p>Lorem lipsum</p>
                    </div>
                </div>

                <div class="destination-choose">
                    <div class="destination-img"><a href="#">{!! HTML::image('images/destination-img1.png') !!}</a></div>
                    <div class="choose-content">
                        <input type="checkbox" id="Beach" name="travel[]" value="Beach">
                        <label for="Beach"><span></span>Beach</label>
                        <p>Lorem lipsum</p>
                    </div>
                </div>
                <div class="destination-choose">
                    <div class="destination-img"><a href="#">{!! HTML::image('images/destination-img2.png') !!}</a></div>
                    <div class="choose-content">
                        <input type="checkbox" id="Egypt" name="travel[]" value="Egypt">
                        <label for="Egypt"><span></span>Egypt</label>
                        <p>Lorem lipsum</p>
                    </div>
                </div>
                <div class="destination-choose">
                    <div class="destination-img"><a href="#">{!! HTML::image('images/destination-img3.png') !!}</a></div>
                    <div class="choose-content">
                        <input type="checkbox" id="Sermany" name="travel[]" value="Sermany">
                        <label for="Sermany"><span></span>Sermany</label>
                        <p>Lorem lipsum</p>
                    </div>
                </div>
                <div class="destination-choose">
                    <div class="destination-img"><a href="#">{!! HTML::image('images/destination-img4.png') !!}</a></div>
                    <div class="choose-content">
                        <input type="checkbox" id="Greece" name="travel[]" value="Greece">
                        <label for="Greece"><span></span>Greece</label>
                        <p>Lorem lipsum</p>
                    </div>
                </div>
                <div class="destination-choose">
                    <div class="destination-img"><a href="#">{!! HTML::image('images/destination-img5.png') !!}</a></div>
                    <div class="choose-content">
                        <input type="checkbox" id="India" name="travel[]" value="India">
                        <label for="India"><span></span>India</label>
                        <p>Lorem lipsum</p>
                    </div>
                </div>
                <div class="destination-choose">
                    <div class="destination-img"><a href="#">{!! HTML::image('images/destination-img6.png') !!}</a></div>
                    <div class="choose-content">
                        <input type="checkbox" id="New York" name="travel[]" value="New York">
                        <label for="New York"><span></span>New York</label>
                        <p>Lorem lipsum</p>
                    </div>
                </div>

            </div>



            <div class="row" style="padding-top:10px;">
                <input type="button" value="Back" class="button signup" id="go_back"/>
            </div>
            <div class="row" style="padding-top:10px;">
                <input type="submit" value="Sign Up" class="common-red-btn button" />
                {!! Form::close() !!}

            </div>



        </div>



        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){

                document.getElementById("uploadBtn").onchange = function () {
                    document.getElementById("uploadFile").value = this.value;
                }
                // this script only for show images
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $('#blah').attr('src', e.target.result);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }
                $(".imgInp").change(function(){
                    readURL(this);
                });

                $('#step2').hide()

                $('#go_back').click(function () {
                    $('#step2').hide();
                    $('#step1').show();

                });
                $('#first_step').click(function () {
                    /*
                     if($("#firstName").val().length < 1){
                     alert("Enter First Name");
                     }
                     else if($("#lastName").val().length < 1){
                     alert("Enter Last Name");
                     }
                     else if($("#username_s").val().length < 1){
                     alert("Enter Username");
                     }
                     else if($("#email_S").val().length < 1){
                     alert("Enter Email");
                     }
                     else if($("#password_s").val().length < 1){
                     alert("Enter Password");
                     }
                     else{
                     */

                    $('#step1').hide();
                    $('#step2').show();
                    /*} */
                });


            });

            $(document).ready(function() {
                //listens for typing on the desired field
                $("#password_repeat").keyup(function() {
                });
                $("#email").keyup(function() {
                    //gets the value of the field
                    var email = $("#email").val();

                    //here would be a good place to check if it is a valid email before posting to your db

                    //displays a loader while it is checking the database
               
                    var APP_URL = {!! json_encode(url('/')) !!};
               

                     $("#emailError").html('<img alt="" src="'+APP_URL+'/images/loader.gif"/>');

                    //here is where you send the desired data to the PHP file using ajax
                    $.get(APP_URL + "/users", {email:email},
                            function(result) {
                               // alert(result);
                                console.log(result);
                                if(result == 1) {
                                    //the email is available
                                   $("#emailError").html("Available");
                                    $("#email").css({"border": "2px solid green","color":"gray"});
                                }
                                else {
                                    //the email is not available
                                    $("#email").css({"border": "2px solid red","color":"gray"});
                                    $("#emailError").html("Email not available");

                                }
                            });


                });
            });



        
        $(function() {

    //populate our years select box
    for (i = new Date().getFullYear(); i > 1900; i--){
        $('#years').append($('<option />').val(i).html(i));
    }
    //populate our months select box
    for (i = 1; i < 13; i++){
        $('#months').append($('<option />').val(i).html(i));
    }
    //populate our Days select box
    updateNumberOfDays(); 

    //"listen" for change events
    $('#years, #months').change(function(){
        updateNumberOfDays(); 
    });

});

//function to update the days based on the current values of month and year
function updateNumberOfDays(){
    $('#days').html('');
    month = $('#months').val();
    year = $('#years').val();
    days = daysInMonth(month, year);

    for(i=1; i < days+1 ; i++){
            $('#days').append($('<option />').val(i).html(i));
    }
}

//helper function
function daysInMonth(month, year) {
    return new Date(year, month, 0).getDate();
}

        </script>

