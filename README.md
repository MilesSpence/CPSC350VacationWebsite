# Vacation Picker

Created in CPSC 350 with two other students. This site allows users to browse cities and information about them using our database. They can pick multiple cities and aggregate them into a "vacation," where the user can access it upon login.

## Database Access
Do `<?php include 'connect_db.php'; ?>`. From here you should be connected, and you can use the variable `$connection` in DB queries.

## Sessions
When a user signs in, we track their presence/data across our site using _sessions_. Having an active session means we can store info about our user across site pages.
If you need to identify a user due to unique querying on your webpage, use `<?php $_SESSION["email"]; ?>` to access the email of a user who visits your page - maybe store it in a variable for use on your queries.

## Tidbits
Include the site header at the top of every publicly-facing page:
`<?php include 'header.php'; ?>`
