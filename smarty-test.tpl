<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smarty Test</title>
</head>
<body>
    {html_options name='dropdown' options=$options selected=$selected}
    <br>
    <br>
    <br>


    {for $i=1 to 10}
        {"5*{$i}={$i*5}"}<br>
    {/for}

    <br>
    <br>
    <br>

    {* This will escape all the html entities *}
    {$str|escape: 'htmlall'}

    <br>
    {$str1|cat:$str2}

    <br>
    <br>

    {* Counter Example *}
    {Counter start=0 skip=2} <br>
    {Counter} <br>
    {Counter} <br>
    {Counter} <br>

    {* Cycle Example *}
    {cycle values="odd,even"} <br>
    {cycle} <br>
    {cycle} <br>
    {cycle} <br>

    <br>
    <br>
    <br>

    {foreach $Contacts as $contact}
        {"Fax = {$contact.fax}"}<br>
        {"Email = {$contact.email}"}<br>
        {"Phone:  Home = {$contact.phone.home}"}<br>
        {"Phone:  Cell = {$contact.phone.cell}"}<br>
    {/foreach}

    {$string1|lower} <br><br>
    {$string2|lower} <br><br>
    {$string1|replace:'ucertify':'uCertify'}<br><br>
    {$string2|replace:'ucertify':'uCertify'}<br><br>
    {$string1|wordwrap:30}<br><br>
    {$string2|wordwrap:30}<br><br>
    {$string1|cat:$string2}<br><br>


    <br>
    <br>
    <br>
    <br>


    <ul>
        {$i = 0}
        {foreach $our_culture as $culture}
            <li>{$culture[$i]}</li>
            {$i = $i + 1}
        {/foreach}
    </ul>

    <br>
    <br>
    <br>
    {html_checkboxes name="checkbox" values=$gender_id output=$gender selected=1}

    <br>
    <br>
    {html_radios name="radio" values=$gender_id output=$gender selected=1}


    <br>
    <br>
    {* Even odd Checking *}
    {if {$number mod 2} eq 0}
        {"Number is even"}
    {else}
        {"Number is odd"}
    {/if}

    <br>
    <br>
    <br>
    {* Printing table of given number *}
    {for $i=1 to 10}
        {"{$number}*{$i}={$i*$number}"}<br>
    {/for}
</body>
</html>