{**
 * templates/user/loginChangePassword.tpl
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Form to change a user's password in order to login.
 *
 *}
{strip}
{assign var="passwordLengthRestrictionLocaleKey" value="user.register.passwordLengthRestriction"}
<link rel="stylesheet" href="http://water-ca.org/ej/public/journals/1/journalStyleSheet.css" type="text/css">
<link rel="stylesheet" href="http://water-ca.org/ej/public/journals/1/usersStyle.css" type="text/css">
{include file="core:user/loginChangePassword.tpl"}
{/strip}
