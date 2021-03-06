<?php class_exists('system\base\View') or exit; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//<?=env('app.host')?>/<?=env('app.name')?>/app/assets/css/styles.css">
    <link rel="stylesheet" href="//<?=env('app.host')?>/<?=env('app.name')?>/app/assets/css/code.css">
    <link rel="stylesheet" href="//<?=env('app.host')?>/<?=env('app.name')?>/app/assets/css/app.css">
    
    <title>Employee List</title>
</head>
<body>
    <div class="admin">
    <header class="admin__header">
        <a href="#" class="logo">
            
        <h1>Employee List</h1>
        </a>
        <div class="toolbar">
        <button class="btn btn--primary">Add New Employee</button>
        <a href="#" class="logout">
            Log In
        </a>
        </div>
    </header>
    <nav class="admin__nav">
        <ul class="menu">
        <li class="menu__item">
            <a class="menu__link" href="#">Dashboard</a>
        </li>
        <li class="menu__item">
            <a class="menu__link" href="employee/view">Employees</a>
        </li>
        <li class="menu__item">
            <a class="menu__link" href="group/view">Groups</a>
        </li>
        <li class="menu__item">
            <a class="menu__link" href="#">Frontend</a>
        </li>
        <li class="menu__item">
            <a class="menu__link" href="#">Backend</a>
        </li>
        <li class="menu__item">
            <a class="menu__link" href="#">Error Logs</a>
        </li>
        </ul>
    </nav>
    <main class="admin__main">
        <h2></h2>
        <div class="dashboard">
        <div class="dashboard__item">
            <div class="card">
            <strong><?php echo $employee_count ?></strong> Employees
            </div>
        </div>
        <div class="dashboard__item">
            <div class="card">
            <strong>2</strong> Employee Groups
            </div>
        </div>
        <div class="dashboard__item dashboard__item--full">
            <div class="card-block">
                
    <table>
        <thead>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Surname
                </th>
                <th>
                    Email
                </th>
                <th>
                    Tel
                </th>
                <th>
                    Start Date
                </th>
                <th>
                    Active
                </th>
                <th>
                    Code
                </th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($employees as $person): ?>
            <tr>
                <td><?php echo $person->first_name ?></td>
                <td><?php echo $person->surname ?></td>
                <td><?php echo $person->email ?></td>
                <td><?php echo $person->contact_number ?></td>
                <td><?php echo $person->start_date ?></td>
                <td><?php echo $person->active ?></td>
                <td><?php echo $person->employee_code ?></td>
                <td><a href="//<?=env('app.host')?>/<?=env('app.name')?>/employee/edit/<?php echo $person->id ?>">Edit</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>   

            </div>
        </div>
        <p>contact me at <a href="mailto:charlcp@gmail.com">charlcp@gmail.com</a>.</p>
    </main>
    <footer class="admin__footer">
            <ul class="ticker">
                <li class="ticker__item">php: <span>18Y</span></li>
                <li class="ticker__item">Java: <span>6Y</span></li>
                <li class="ticker__item">C#: <span>4Y</span></li>
                <li class="ticker__item">JS: <span>18Y</span></li>
                <li class="ticker__item">HTML: <span>18Y</span></li>
                <li class="ticker__item">Android: <span>4Y</span></li>
                <li class="ticker__item">XML: <span>18Y</span></li>

                <li class="ticker__item">XML: <span>18Y</span></li>
                <li class="ticker__item">XUL: <span>2Y</span></li>
                <li class="ticker__item">ClaML: <span>2Y</span></li>
                <li class="ticker__item">DITA: <span>2Y</span></li>
                <li class="ticker__item">DocBook: <span>2Y</span></li>
                <li class="ticker__item">eLML: <span>2Y</span></li>
                <li class="ticker__item">GIS: <span>2Y</span></li>
                <li class="ticker__item">MathML: <span>2Y</span></li>
                <li class="ticker__item">RSS: <span>2Y</span></li>
                <li class="ticker__item">SOAP: <span>2Y</span></li>
                <li class="ticker__item">SVG: <span>2Y</span></li>
                <li class="ticker__item">XHTML: <span>2Y</span></li>
                <li class="ticker__item">XQuery: <span>2Y</span></li>
                <li class="ticker__item">XPath: <span>2Y</span></li>
                <li class="ticker__item">XSL: <span>2Y</span></li>
                <li class="ticker__item">XUL: <span>2Y</span></li>
                <li class="ticker__item">XSLT: <span>18Y</span></li>
        
                <li class="ticker__item">Kotlin: <span>2Y</span></li>
                <li class="ticker__item">CSS: <span>18Y</span></li>
                <li class="ticker__item">MySQL: <span>18Y</span></li>
                <li class="ticker__item">MSSQL: <span>12Y</span></li>
                <li class="ticker__item">PostgreSQL: <span>12Y</span></li>
                <li class="ticker__item">MongoDB: <span>3Y</span></li>
                <li class="ticker__item">Firebase: <span>2Y</span></li>
                <li class="ticker__item">DynamoDB: <span>2Y</span></li>
                <li class="ticker__item">AWS: <span>4Y</span></li>
                <li class="ticker__item">Delpi: <span>5Y</span></li>
                <li class="ticker__item">Pascal: <span>4Y</span></li>
                <li class="ticker__item">Laravel: <span>6Y</span></li>
                <li class="ticker__item">Symfony: <span>5Y</span></li>
                <li class="ticker__item">Yi: <span>2Y</span></li>
                <li class="ticker__item">CakePHP: <span>5Y</span></li>
                <li class="ticker__item">Angular: <span>2Y</span></li>
                <li class="ticker__item">Vue.js: <span>1Y</span></li>
                <li class="ticker__item">Node.js: <span>5Y</span></li>
                <li class="ticker__item">Debian: <span>7Y</span></li>
                <li class="ticker__item">Kali: <span>2Y</span></li>
                <li class="ticker__item">Apache: <span>18Y</span></li>
                <li class="ticker__item">Delpi: <span>5Y</span></li>
                <li class="ticker__item">Delpi: <span>5Y</span></li>
                <li class="ticker__item">Delpi: <span>5Y</span></li>
            </ul>
    </footer>
    </div>
        
        <main>
            
        </main>
        <footer>
        
        </footer>
   
    
</body>
</html>


