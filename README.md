<h1>💊 MedZone Pharmacy Store</h1>

<h2>👨‍🎓 Student Information</h2>

<p><strong>Student Name:</strong> Ahmed Al_Athwari</p>
<p><strong>Student ID:</strong> 20232022097</p>

<hr>

<h2>📌 Project Overview</h2>

<p>
    MedZone is a complete online pharmacy e-commerce platform developed using Laravel.
</p>

<p>
    The system allows customers to browse medicines, view product details,
    add products to cart, place orders, submit reviews, and manage their shopping experience.
</p>

<p>
    The system also provides an administration panel where administrators can manage
    categories, products, users, roles, comments, orders, FAQs, messages, and website settings.
</p>

<hr>

<h2>🎯 Project Objectives</h2>

<ul>
    <li>Build a complete pharmacy e-commerce platform.</li>
    <li>Implement customer and administrator functionalities.</li>
    <li>Apply Laravel MVC architecture.</li>
    <li>Use Eloquent ORM relationships.</li>
    <li>Implement authentication and authorization.</li>
    <li>Build order, review, and role management systems.</li>
</ul>

<hr>

<h2>🏗️ System Modules</h2>

<h3>1. Category Management</h3>

<ul>
    <li>Add, edit, show, and delete categories.</li>
    <li>Upload category images.</li>
    <li>Support parent and child categories.</li>
    <li>Display recursive category tree.</li>
</ul>

<h3>2. Product Management</h3>

<ul>
    <li>Add, edit, show, and delete products.</li>
    <li>Manage product price, quantity, tax, status, and details.</li>
    <li>Connect products with categories.</li>
</ul>

<h3>3. Product Image Gallery</h3>

<ul>
    <li>Upload multiple images for each product.</li>
    <li>Display product gallery on product details page.</li>
</ul>

<h3>4. User Authentication</h3>

<ul>
    <li>User registration.</li>
    <li>User login and logout.</li>
    <li>Jetstream authentication system.</li>
</ul>

<h3>5. Shopping Cart System</h3>

<ul>
    <li>Add products to cart.</li>
    <li>Update product quantity.</li>
    <li>Remove products from cart.</li>
    <li>Calculate cart total.</li>
</ul>

<h3>6. Checkout & Orders</h3>

<ul>
    <li>Create customer orders.</li>
    <li>Save order information.</li>
    <li>Save ordered products in a separate table.</li>
    <li>Clear cart after order completion.</li>
</ul>

<h3>7. Review & Rating System</h3>

<ul>
    <li>Customers can submit product reviews.</li>
    <li>Each review has subject, review text, and rate from 1 to 5.</li>
    <li>Calculate total reviews.</li>
    <li>Calculate average rating.</li>
    <li>Display star rating dynamically.</li>
</ul>

<h3>8. Admin Comment Management</h3>

<ul>
    <li>View all customer reviews.</li>
    <li>Show review details.</li>
    <li>Approve reviews by changing status from new to true.</li>
    <li>Delete reviews.</li>
    <li>Display approved reviews only on product pages.</li>
</ul>

<h3>9. User & Role Management</h3>

<ul>
    <li>View users in admin panel.</li>
    <li>Show user details.</li>
    <li>Assign roles to users.</li>
    <li>Remove roles from users.</li>
    <li>Prevent duplicate role assignment.</li>
</ul>

<h3>10. FAQ Management</h3>

<ul>
    <li>Create, edit, show, and delete FAQs.</li>
    <li>Display active FAQs on frontend.</li>
</ul>

<h3>11. Contact Messages</h3>

<ul>
    <li>Receive customer messages from contact form.</li>
    <li>Store messages in database.</li>
    <li>View messages in admin panel.</li>
</ul>

<h3>12. Website Settings</h3>

<ul>
    <li>Manage website title, keywords, and description.</li>
    <li>Manage company information.</li>
    <li>Manage contact information.</li>
    <li>Manage SMTP settings.</li>
    <li>Manage social media links.</li>
    <li>Manage About Us, Contact, and References pages.</li>
</ul>

<hr>

<h2>🗄️ Database Tables</h2>

<ul>
    <li>users</li>
    <li>categories</li>
    <li>products</li>
    <li>images</li>
    <li>comments</li>
    <li>shop_carts</li>
    <li>orders</li>
    <li>order_products</li>
    <li>messages</li>
    <li>faqs</li>
    <li>settings</li>
    <li>roles</li>
    <li>role_user</li>
</ul>

<hr>

<h2>🔗 Database Relationships</h2>

<h3>One To Many</h3>

<ul>
    <li>Category → Products</li>
    <li>Product → Images</li>
    <li>Product → Comments</li>
    <li>User → Comments</li>
    <li>User → Orders</li>
    <li>Order → Order Products</li>
</ul>

<h3>Many To Many</h3>

<ul>
    <li>Users ↔ Roles through role_user table</li>
</ul>

<hr>

<h2>⭐ Review Workflow</h2>

<ol>
    <li>Customer submits a product review.</li>
    <li>The review is saved with status new.</li>
    <li>Admin reviews the comment.</li>
    <li>Admin approves it by changing status to true.</li>
    <li>The approved review appears on the product page.</li>
</ol>

<hr>

<h2>🔐 Role Management Workflow</h2>

<ol>
    <li>Admin opens the user management page.</li>
    <li>Admin selects a user.</li>
    <li>Admin assigns a role from the available roles.</li>
    <li>The role is saved in the role_user pivot table.</li>
    <li>Admin can remove the role using detach.</li>
</ol>

<hr>

<h2>🛠️ Technologies Used</h2>

<ul>
    <li>Laravel 9</li>
    <li>PHP 8</li>
    <li>MySQL</li>
    <li>Bootstrap</li>
    <li>AdminLTE</li>
    <li>Jetstream</li>
    <li>Blade Templates</li>
    <li>Eloquent ORM</li>
    <li>Git</li>
    <li>GitHub</li>
</ul>

<hr>

<h2>🚀 Installation</h2>

<pre><code>git clone https://github.com/AhmedAlathwari/MedZone-20232022097.git

cd MedZone-20232022097

composer install

cp .env.example .env

php artisan key:generate

php artisan migrate

php artisan storage:link

php artisan serve</code></pre>

<hr>

<h2>▶️ Run Project</h2>

<pre><code>php artisan serve</code></pre>

<p>Open:</p>

<pre><code>http://127.0.0.1:8000/home</code></pre>

<hr>

<h2>📈 Current Project Status</h2>

<ul>
    <li>Categories System: Completed</li>
    <li>Products System: Completed</li>
    <li>Product Gallery: Completed</li>
    <li>Authentication: Completed</li>
    <li>Shopping Cart: Completed</li>
    <li>Checkout & Orders: Completed</li>
    <li>Comments & Reviews: Completed</li>
    <li>Admin Review Approval: Completed</li>
    <li>User Management: Completed</li>
    <li>Role Management: Completed</li>
    <li>Settings System: Completed</li>
    <li>FAQ System: Completed</li>
    <li>Contact Messages System: Completed</li>
</ul>

<hr>

<h2>📚 Educational Purpose</h2>

<p>
    This project was developed as part of a university coursework assignment to demonstrate practical skills in Laravel web application development.
</p>

<hr>

<h2>❤️ Developed By</h2>

<p><strong>Ahmed Al_Athwari</strong></p>
<p><strong>Student ID:</strong> 20232022097</p>

<p>MedZone Pharmacy Store © 2026</p>
