{*  This is a smarty comment.  *}

{*******************************************
Topic:  Smarty Practice
Auther: Md Amzad
Date: 25/11/2022
*******************************************}


{* Variable *}
{$var = "This is a variable"}
{$var}
<br>

{$var = [2, 4, 3, 7, 8, 1]}
{$var[4]}
<br>

{* With key value Array *}
{$student=['name'=>'Amzad', 'Address'=>'Muaffarpur', 'Course'=>'B.Tech', 'roll'=>3]}
{$student.name}
<br>

{$smarty.config.var}  {*This is for configuration file.*}

{* Value Assign *}
{{assign var="varname" value='value'}}
{$varname}
<br>

{* Constant Value *}
{"student"}

{$smarty.server.Login}

{* Functions *}
{* {{function display}
    {$text}
{/function}} *}

{* {display var='text', value='Hello'} *}




{* Math *}
{$foo = 123}
{$bar = 1}
{$foo+1}

{$foo*$bar}


{assign var="foo" value={$foo+$bar}}

{* Literal *}
<script>
   // the following braces are ignored by Smarty
   // since they are surrounded by whitespace
   function foobar {
	alert('foobar!');
   }
   // this one will need literal escapement
   {literal}
	function bazzy {alert('foobar!');}
   {/literal}
</script>

<br>

{* Variables *}
Hello {$firstname} {$lastname}, glad to see you can make it.
<br />
{* this will not work because variables are case sensitive *}
{* This weeks meeting is in {$meetingplace}. *}
{* this will work *}
This weeks meeting is in {$meetingPlace}.


{* Accessing the config file variable *}
{config_load file='config.conf'};
<br>
{$smarty.config.isComplete}
{#anothervar#}

{* display value of page from URL ($_GET) http://www.example.com/index.php?page=foo *}
{$smarty.get.page}

{* display the variable "page" from a form ($_POST['page']) *}
{* {$smarty.post.page} *}


{* {$smarty.cookies.varname} *}


{* display the variable "username" from merged get/post/cookies/server/env *}
{* {$smarty.request.username} *}
<br>
{* Current time stamp *}
{"Current Time Stamp: {$smarty.now}"} {* This will give the time stamp *}
<br>
{* Convert it into date format *}
{"Current Date and Time in Formatted: {$smarty.now|date_format: '%d/%m/%Y  %H:%M:%S'}"}

{* Access the php constant value *}
{$smarty.const.const_var_name}
<br>

{* Get the current template name *}
{$smarty.template}

{* It will return the template object *}
{* {$smarty.template_object}  *}

<br>
{$smarty.current_dir}

<br>
{* Smarty version *}
{$smarty.version}

<br>
{* Variable Modifiers *}
{$str = "This is a string."}
{$str|upper} {* This will print in upper case. *}
<br>
{$str|truncate:7:"hidden"}
<br>
{"-"|str_repeat:100}<br>

{$arr = [2, 4, 1, 7, 9]}
{$arr|count}<br>

{$str|capitalize}<br>

{$str|cat:" This is another string which is concatinated."}<br>

{* count character without space.*}
{$str|count_characters}<br>

{* count characters with space. *}
{$str|count_characters:true}<br>


{$str|count_words}<br>

{* set default value to a variable. *}
{$email|default:"Email Not Provided."}<br>

{$str|indent:4}<br>

{$str2 = "This is line 1.\n This is line 2."}
{$str2|nl2br}<br>

{$str2|regex_replace:'/[\n,\t,\r]/':' '}<br>

{$str|replace:' ':'\n'}<br>

{$str|spacify}<br>
{$str|spacify:'^'}<br>

{$num = 123.34543}

{$num|string_format:'%.2f'}<br> {* 123.34 *}
{$num|string_format:'%d'}<br> {* 123 *}

{$str2|strip}<br> {* This replaces all spaces, newlines and tabs with a single space, or with the supplied string. *}

{$tagstr = "Blind Woman Gets <font face=\"helvetica\">New Kidney</font> from Dad she Hasn't Seen in <b>years</b>."}
{$tagstr|strip_tags:false}<br>

{$str|to_charset:'UTF-8'}<br>

{$str2 = "Blind woman gets new kidney from dad she hasn't seen in years."}
{$str2|wordwrap:30}<br>

{* Combining multiple modifiers on a single variable. *}
{$str2|lower|capitalize}<br>


{append var="name" value="Mohd" index="first"}
{append var="name" value="Amzad" index="last"}

{"Full name: {$name.first} {$name.last}"}<br>

{assign var="var_name" value="value" scope="global"}

{$var_name}<br>

<html>
   <head>
        <title>{block name="title"}
            Parent Title
        {/block}</title>
   </head>
</html>

{* {function name="sum"}
    {"Sum = "$data[0]+$data[1]}
{/function}

{$numbers = [10, 20]}
{call name=sum data=$numbers} *}

{capture name="foo" assign="bar"}
   {include file="test.php"}
{/capture}

{$smarty.capture.foo}

<br>
<br>
<br>

<ul>
   {for $i = 1 to 10}
      <li>
         Item {$i} <br>
      </li>
   {/for}
</ul>

<br>
<br>
<br>

<ul>
{for $i= 2 to 1}
    <li>{$i}</li>
{forelse}
  no iteration
{/for}
</ul>
<br>
<br>
<br>

<ul>
   {foreach $colorName as $color}
      <li>
         {$color}
      </li>
   {/foreach}
</ul>

<br>
<br>
<br>


{foreach $dbData as $data}
   Name:  {$data.Name} <br>
   Username: {$data.username}   <br> 
   Password: {$data.password}   <br>
   {foreachelse}  
      No any data...
{/foreach}

<br>
<br>
<br>

{* if-alse example *}
{if 1 eq 10}
   Equal.
   {else}
      Not Equal.
{/if}

{* {include_php file="filename.php"} *} {* This used to include php file in template file.*}

<br>
<br>
{ldelim}Inside delimeter{rdelim}
{*
{php}
 Here you can write your php code.
{/php} *}

<br>
<br>

<ul>
   {section name="customers" loop=$custname}
      <li>
         {$smarty.section.customers.index}
         {$custname[customers]}
      </li>
   {/section}
</ul>

{* the following will be all run into one line upon output *}
{strip}
   <table border='0'>
    <tr>
     <td>
      <a href="{$url}">
       <font color="green">This is a test</font>
      </a>
     </td>
    </tr>
   </table>
   {/strip}

{$foo = 10}
{while $foo > 0}
   {$foo--}
{/while}


<br>
<br>
<br>

{* initialize the count *}
{counter start=0 skip=2}<br />
{counter}<br />
{counter}<br />
{counter}<br />

<br>
<br>
<br>

<ul>
   {section "forcycle" loop=3}
      <li>{cycle values="even,odd"}</li><br>
   {/section}
</ul>
<br>
<br>

{eval var=#isComplete#}<br>
{eval var=#anothervar#}

<br>
<br>

{* fetch *}
{* {fetch file="filename/url"} is used to retrieve files from the local file system, http, or ftp and display the contents. *}

<label>Select Gender</label><br>
{html_checkboxes options=[1=>Male, 2=>Female, 3=>Other]}

<br>
<br>
<br>
{html_image file="https://www.w3schools.com/css/paris.jpg" height='100%' width='100%' alt="Image Not Loaded."}
<br>
<br>
<br>

{html_options name="menu" options=['name'=>'Name', 'roll'=>'Roll', 'id'=>'Id'] selected='name'}

<br>
Select DOB
{html_select_date}

<br>
{html_select_time}

<br>
{html_table loop=['Name', 'Email', 'Mobile']}

<br>

{mailto address="amzad.nnt@gmail.com" subject="For testing purpose" text="This is a text message."}

<br>
<br>
<br>

{math equation="(x+y)/z" x=2 y=3 z=1}

<br>
<br>

{textformat wrap=40}

This is foo.
This is foo.
This is foo.
This is foo.
This is foo.
This is foo.

This is bar.

bar foo bar foo     foo.
bar foo bar foo     foo.
bar foo bar foo     foo.
bar foo bar foo     foo.
bar foo bar foo     foo.
bar foo bar foo     foo.
bar foo bar foo     foo.

{/textformat}

{section name='arrsec' loop=$arr}
   {$arr[arrsec]}
{/section}

<br>
<br>
<br>

{* {Temp::$property} *}


{* the long way *}
{if $title eq ''}
   &nbsp;
{else}
   {$title}
{/if}

{* the short way *}
{$title|default:'&nbsp;'}
