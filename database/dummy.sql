-- ADDRESSES
INSERT INTO addresses (user_id, label, address, recipient_name, recipient_phone, created_at, updated_at) VALUES
(1, 'Home', 'Jl. Mawar No. 10, Jakarta Selatan', 'John Doe', '081234567890', NOW(), NOW()),
(1, 'Office', 'Gedung Plaza Tower Lantai 5, Jakarta Pusat', 'John Doe', '081234567891', NOW(), NOW()),
(2, 'Home', 'Jl. Melati No. 25, Bandung', 'Jane Smith', '081234567892', NOW(), NOW()),
(2, 'Office', 'Jl. Anggrek No. 45, Surabaya', 'Jane Smith', '081234567893', NOW(), NOW());

-- CATEGORIES
INSERT INTO categories (id, name, slug, description, image, is_active, is_featured, created_at, updated_at) VALUES
(1, 'Fruits & Vegetables', 'fruits-vegetables', 'Fresh fruits and vegetables for your daily needs.', NULL, 1, 1, NOW(), NOW()),
(2, 'Dairy & Eggs', 'dairy-eggs', 'High-quality dairy products and fresh eggs.', NULL, 1, 1, NOW(), NOW()),
(3, 'Bakery', 'bakery', 'Freshly baked bread, cakes, and pastries.', NULL, 1, 0, NOW(), NOW()),
(4, 'Meat & Seafood', 'meat-seafood', 'Fresh and frozen meat and seafood.', NULL, 1, 1, NOW(), NOW()),
(5, 'Snacks & Beverages', 'snacks-beverages', 'Wide variety of snacks and refreshing beverages.', NULL, 1, 0, NOW(), NOW()),
(6, 'Pantry Essentials', 'pantry-essentials', 'Staples like rice, pasta, and canned goods.', NULL, 1, 0, NOW(), NOW()),
(7, 'Frozen Foods', 'frozen-foods', 'Convenient and quick-to-cook frozen items.', NULL, 1, 0, NOW(), NOW()),
(8, 'Personal Care', 'personal-care', 'Toiletries and personal hygiene products.', NULL, 1, 0, NOW(), NOW()),
(9, 'Household Items', 'household-items', 'Cleaning supplies and essential household products.', NULL, 1, 0, NOW(), NOW());


-- PRODUCTS
INSERT INTO products (id, category_id, name, slug, description, images, price, stock, tags, is_active, is_featured, created_at, updated_at) VALUES
-- Fruits & Vegetables
(1, 1, 'Banana', 'banana', 'Fresh and ripe bananas.', NULL, 20000, 100, '["fruit", "tropical"]', 1, 1, NOW(), NOW()),
(2, 1, 'Carrot', 'carrot', 'Organic and crunchy carrots.', NULL, 15000, 50, '["vegetable", "root"]', 1, 0, NOW(), NOW()),

-- Dairy & Eggs
(3, 2, 'Fresh Milk 1L', 'fresh-milk-1l', 'High-quality fresh milk in 1-liter packaging.', NULL, 25000, 200, '["dairy", "milk"]', 1, 1, NOW(), NOW()),
(4, 2, 'Eggs Pack (12)', 'eggs-pack-12', 'Farm-fresh eggs in a pack of 12.', NULL, 30000, 150, '["eggs", "protein"]', 1, 0, NOW(), NOW()),

-- Bakery
(5, 3, 'Whole Wheat Bread', 'whole-wheat-bread', 'Soft and healthy whole wheat bread.', NULL, 35000, 80, '["bread", "wheat", "healthy"]', 1, 1, NOW(), NOW()),
(6, 3, 'Croissant', 'croissant', 'Buttery and flaky croissants.', NULL, 15000, 40, '["pastry", "breakfast"]', 1, 0, NOW(), NOW()),

-- Meat & Seafood
(7, 4, 'Chicken Breast', 'chicken-breast', 'Fresh and boneless chicken breast.', NULL, 60000, 70, '["meat", "chicken"]', 1, 1, NOW(), NOW()),
(8, 4, 'Salmon Fillet', 'salmon-fillet', 'Premium quality salmon fillet.', NULL, 120000, 30, '["seafood", "salmon", "fish"]', 1, 1, NOW(), NOW()),

-- Snacks & Beverages
(9, 5, 'Potato Chips', 'potato-chips', 'Crunchy and tasty potato chips.', NULL, 20000, 200, '["snacks", "salty"]', 1, 0, NOW(), NOW()),
(10, 5, 'Orange Juice', 'orange-juice', 'Refreshing orange juice in a 1-liter bottle.', NULL, 25000, 100, '["beverage", "juice"]', 1, 0, NOW(), NOW()),

-- Pantry Essentials
(11, 6, 'White Rice 5kg', 'white-rice-5kg', 'High-quality white rice in 5kg packaging.', NULL, 60000, 50, '["rice", "staple"]', 1, 0, NOW(), NOW()),
(12, 6, 'Pasta Spaghetti', 'pasta-spaghetti', 'Durum wheat spaghetti for perfect Italian dishes.', NULL, 25000, 150, '["pasta", "italian"]', 1, 0, NOW(), NOW()),

-- Frozen Foods
(13, 7, 'Frozen French Fries', 'frozen-french-fries', 'Ready-to-cook frozen french fries.', NULL, 30000, 80, '["frozen", "snacks"]', 1, 0, NOW(), NOW()),
(14, 7, 'Chicken Nuggets', 'chicken-nuggets', 'Delicious and easy-to-cook chicken nuggets.', NULL, 45000, 120, '["frozen", "chicken"]', 1, 0, NOW(), NOW()),

-- Personal Care
(15, 8, 'Shampoo 500ml', 'shampoo-500ml', 'Gentle and nourishing shampoo.', NULL, 35000, 70, '["personal", "haircare"]', 1, 0, NOW(), NOW()),
(16, 8, 'Toothpaste', 'toothpaste', 'Whitening and cavity protection toothpaste.', NULL, 20000, 100, '["personal", "oralcare"]', 1, 0, NOW(), NOW()),

-- Household Items
(17, 9, 'Dishwashing Liquid', 'dishwashing-liquid', 'Powerful grease-cutting dishwashing liquid.', NULL, 25000, 80, '["household", "cleaning"]', 1, 0, NOW(), NOW()),
(18, 9, 'Laundry Detergent', 'laundry-detergent', 'Effective and long-lasting laundry detergent.', NULL, 45000, 90, '["household", "cleaning"]', 1, 0, NOW(), NOW());

-- ORDERS
INSERT INTO orders (id, user_id, address_id, grand_total, status, notes, payment_method, payment_proof, created_at, updated_at) VALUES
(1, 1, 1, 150000, 'process', 'Please deliver between 9 AM to 12 PM.', 'transfer', NULL, NOW(), NOW()),
(2, 1, 2, 75000, 'completed', 'Leave at the front desk.', 'cash_on_delivery', NULL, NOW(), NOW()),
(3, 2, 3, 120000, 'process', 'Call me upon arrival.', 'transfer', NULL, NOW(), NOW()),
(4, 2, 4, 200000, 'cancelled', 'Order cancelled by user.', 'cash_on_delivery', NULL, NOW(), NOW()),
(5, 1, 1, 180000, 'completed', 'Deliver after 5 PM.', 'transfer', NULL, NOW(), NOW());

-- ORDER ITEMS
INSERT INTO order_items (id, order_id, product_id, quantity, unit_amount, total_amount, created_at, updated_at) VALUES
-- Order 1
(1, 1, 1, 3, 20000, 60000, NOW(), NOW()), -- Banana
(2, 1, 2, 2, 15000, 30000, NOW(), NOW()), -- Carrot
(3, 1, 3, 2, 25000, 50000, NOW(), NOW()), -- Fresh Milk 1L

-- Order 2
(4, 2, 4, 1, 30000, 30000, NOW(), NOW()), -- Eggs Pack (12)
(5, 2, 5, 1, 35000, 35000, NOW(), NOW()), -- Whole Wheat Bread

-- Order 3
(6, 3, 7, 2, 60000, 120000, NOW(), NOW()), -- Chicken Breast

-- Order 4
(7, 4, 8, 1, 120000, 120000, NOW(), NOW()), -- Salmon Fillet
(8, 4, 9, 4, 20000, 80000, NOW(), NOW()), -- Potato Chips

-- Order 5
(9, 5, 10, 2, 25000, 50000, NOW(), NOW()), -- Orange Juice
(10, 5, 12, 5, 25000, 125000, NOW(), NOW()); -- Pasta Spaghetti
