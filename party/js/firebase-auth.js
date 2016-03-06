// Create a callback to handle the result of the authentication
function authHandler(error, authData) {
    if (error) {
        console.log("Login Failed!", error);
    } else {
        console.log("Authenticated successfully with payload:", authData);
    }
}

// Authenticate with email/password combination
ref.authWithPassword({email : "", password : ""}, authHandler);

// Or via popular OAuth providers ("facebook", "google", or "twitter")
ref.authWithOAuthPopup("facebook", authHandler);
ref.authWithOAuthRedirect("facebook", authHandler);

ref.authWithOAuthPopup("google", authHandler);
ref.authWithOAuthRedirect("google", authHandler);

ref.authWithOAuthPopup("twitter", authHandler);
ref.authWithOAuthRedirect("twitter", authHandler);


// Log the user out
ref.unauth();