<!DOCTYPE html>
<html lang=&quot;en&quot;>
    <head>
        <meta charset=&quot;UTF-8&quot;>
        <title>Sign Up</title>
        <link rel=&quot;stylesheet&quot; href=&quot;https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css&quot;>
    </head>
    <body>
        <div class=&quot;container&quot;>
            <div class=&quot;row&quot;>
                <div class=&quot;col-md-12&quot;>
                    <h2>Register</h2>
                    <p>Please fill this form to create an account.</p>
                    <form action=&quot;&quot; method=&quot;post&quot;>
                        <div class=&quot;form-group&quot;>
                            <label>Full Name</label>
                            <input type=&quot;text&quot; name=&quot;name&quot; class=&quot;form-control&quot; required>
                        </div>    
                        <div class=&quot;form-group&quot;>
                            <label>Email Address</label>
                            <input type=&quot;email&quot; name=&quot;email&quot; class=&quot;form-control&quot; required />
                        </div>    
                        <div class=&quot;form-group&quot;>
                            <label>Password</label>
                            <input type=&quot;password&quot; name=&quot;password&quot; class=&quot;form-control&quot; required>
                        </div>
                        <div class=&quot;form-group&quot;>
                            <label>Confirm Password</label>
                            <input type=&quot;password&quot; name=&quot;confirm_password&quot; class=&quot;form-control&quot; required>
                        </div>
                        <div class=&quot;form-group&quot;>
                            <input type=&quot;submit&quot; name=&quot;submit&quot; class=&quot;btn btn-primary&quot; value=&quot;Submit&quot;>
                        </div>
                        <p>Already have an account? <a href=&quot;login.php&quot;>Login here</a>.</p>
                    </form>
                </div>
            </div>
        </div>    
    </body>
</html>
