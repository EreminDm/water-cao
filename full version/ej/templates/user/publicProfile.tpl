{**
 * templates/user/publicProfile.tpl
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Public user profile display.
 *
 *}
{strip}
{assign var="pageTitle" value="user.profile.publicProfile"}
<link rel="stylesheet" href="http://water-ca.org/ej/public/journals/1/journalStyleSheet.css" type="text/css">
<link rel="stylesheet" href="http://water-ca.org/ej/public/journals/1/usersStyle.css" type="text/css">
{url|assign:"url" op="profile"}{include file="common/header.tpl"}
{/strip}

<div id="profilePicContent" style="float: right;">
	{assign var="profileImage" value=$user->getSetting('profileImage')}
	{if $profileImage}
		<img height="{$profileImage.height|escape}" width="{$profileImage.width|escape}" alt="{translate key="user.profile.profileImage"}" src="{$sitePublicFilesDir}/{$profileImage.uploadName}" />
	{/if}
</div>

<div id="mainContent">

<h4>
	{$user->getFullName()|escape}
	{if $isUserLoggedIn}
		{url|assign:"mailUrl" page="user" op="email" to=$user->getEmail()|to_array}
		{icon name="mail" url=$mailUrl}
	{/if}
</h4>

<div class="table-responsive">
<table class="listing" width="100%">
	{if $user->getLocalizedAffiliation()}
		<tr valign="top">
			<td class="label" width="20%">
				{translate key="user.affiliation"}
			</td>
			<td class="data" width="80%">
				{$user->getLocalizedAffiliation()|escape|nl2br}
			</td>
		</tr>
	{/if}{* $user->getLocalizedAffiliation() *}

	{if $user->getLocalizedBiography()}
		<tr valign="top">
			<td class="label">
				{translate key="user.biography"}
			</td>
			<td class="data">
				{$user->getLocalizedBiography()|strip_unsafe_html}
			</td>
		</tr>
	{/if}{* $user->getLocalizedBiography() *}
</table>
</div>

</div>{* id="mainContent" *}

{include file="common/footer.tpl"}

