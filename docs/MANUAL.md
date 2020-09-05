# End User Manual

### Setup
1. Enable the module via `ACP --> Modules --> Modules List`
2. Go into your Spotify and find the "Share" option then find "Copy Embed Code" and you'll get a code snippet which will have your link to add to your settings
3. In `ACP --> Spotify Settings` place your Spotify Album URL into the configuration option then save and now you're done.

### CSP
- Requires frame-src `https://open.spotify.com/embed/album` in case you've overwritten the default CSP header.

```php
"frame-src" => [
   "self" => true,
   "allow" => [
       'https://open.spotify.com/embed/album'
   ]
],
```
