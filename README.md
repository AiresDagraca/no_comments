# BuddyBoss Comment Restrictions by Role

This WordPress snippet disables the ability for users with specified roles to comment on activity feed items in BuddyBoss, enhancing control over community interactions and ensuring that only designated roles have the privilege to engage in activity feed discussions.

## Description

In certain BuddyBoss communities, it may be necessary to limit who can comment on activity feed items to maintain a certain level of interaction quality or to restrict participation to users with specific roles. This snippet provides a straightforward solution by restricting comment capabilities based on user roles.

## Features

- Restricts commenting on BuddyBoss activity feed items based on specified user roles.
- Easily customizable to include any number of user roles.
- Integrates seamlessly with BuddyBoss without affecting other functionalities.

## Installation

1. **Copy the Snippet**: Copy the provided PHP code.
2. **Add to WordPress**: Paste the code into your theme's `functions.php` file or within a custom plugin.
3. **Customize Role Restrictions**: Modify the `$restricted_roles` array to include the roles you wish to restrict from commenting.

## Usage

Once installed, the function automatically checks the role of the current user attempting to comment on an activity feed item. If the user's role is listed in the `$restricted_roles` array, their ability to comment is disabled.

## Customization

### Adjusting Restricted Roles

Change the roles within the `$restricted_roles` array to manage which user roles are restricted from commenting:

```php
$restricted_roles = array('subscriber'); // Add or remove roles as needed

$restricted_roles = array('subscriber', 'custom_role'); // Example with an added custom role
