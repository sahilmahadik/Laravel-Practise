<h1>Basic Template Practise 2</h1>

@include('basic.pages.header',["data"=>"Hi User"])

<h2>Home Page</h2>

@include('basic.pages.footer')

@includeIf('basic.pages.nofound')