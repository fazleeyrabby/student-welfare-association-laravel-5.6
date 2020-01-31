
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Example 3</title><!-- 
    <link rel="stylesheet" href="{{ asset('public/css/pdf.css') }}"> -->
   
  </head>
  <body>
    <main>
      
      <table>
        
        <tr>
            <th class="">Journal Title</th>
            <td style="text-align: justify;">{!! $article_title !!}</td>
        </tr>
        <tr>
            <th class="">DESCRIPTION</th>
            <td style="text-align: justify;">{!!  $article_description !!}</td>
        </tr>
        <tr>
            <th class="">Author Name</th>
            <td class="">{!! $author_name !!}</td>
        </tr>
      </table>
  </body>
</html>