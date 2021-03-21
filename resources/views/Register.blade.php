<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="#" />
  </head>
  
  <body>
    <h1>Buat Account Baru!</h1>

    <!-- FORM -->
    <form method="POST" name="signup-form" action="/Welcome1">
      {{csrf_field()}}
      <h4 class="form-title">Sign Up Form</h4>

      <!-- FIRST NAME -->
      <p class="signup-firstName">First name:</p>
      <input type="text" name="firstname" />

      <!-- LAST NAME -->
      <p class="signup-lastName">Last name:</p>
      <input type="text" name="lastname" />

      <!--GENDER-->
      <p class="signup-gender">Gender:</p>
      <input type="radio" name="gender" value="Male" id="male" /> 
      <label for="male">Male</label
      ><br/>

      <input type="radio" name="gender" value="Female" id="female" /> 
      <label for="female">Female</label
      ><br/>
      
      <input type="radio" name="gender" value="Other" id="other" /> 
      <label for="other">Other</label>

      <!--NATIONALITY-->
      <p class="signup-national">Nationality:</p>
      <select name="Nationality" id="nationality">
        <option value="Indonesian">Indonesian</option>
        <option value="Singaporean">Singaporean</option>
        <option value="Malaysian">Malaysian</option>
        <option value="Australian">Australian</option>
      </select>

      <!--LANGUAGE-->
      <p class="signup-lang">Language Spoken:</p>

      <input type="checkbox" name="language[]" value="indonesia" id="indonesia" />
      <label for="indonesia">Bahasa Indonesia</label><br/>

      <input type="checkbox" name="language[]" value="english" id="english" />
      <label for="english">English</label><br/>

      <input type="checkbox" name="language[]" value="other" id="l-other" />
      <label for="l-other">Other</label>

      <!--BIO-->
      <p class="signup-bio">Bio:</p>
      <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br />

      <!--SUBMIT BUTTON-->
      <button type="submit">Sign Up</button>
    </form>
  </body>
</html>