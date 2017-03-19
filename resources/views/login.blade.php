<script src="https://cdn.auth0.com/js/lock/10.12.1/lock.min.js"></script>
<script>
  var lock = new Auth0Lock('4wNGBV4MuFSQ8VAAzeWDKVSxsz2hSXMc', 'fmontoy8.auth0.com', {
    auth: {
      redirectUrl: 'https://YOUR_APP/callback',
      responseType: 'code',
      params: {
        scope: 'openid email' // Learn about scopes: https://auth0.com/docs/scopes
      }
    }
  });
</script>
<button onclick="lock.show();">Login</button>
