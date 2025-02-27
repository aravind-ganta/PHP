from flask import Flask, jsonify

app = Flask(__name__)

# Sample product data
products = [
    {
        'name': 'Product 1',
        'description': 'Description of Product 1',
        'price': 19.99,
        'image_url': 'product1.jpg'
    },
    {
        'name': 'Product 2',
        'description': 'Description of Product 2',
        'price': 29.99,
        'image_url': 'https://ibb.co/rm2hKtV'
    },
    # Add more products as needed
]

@app.route('/products', methods=['GET'])
def get_products():
    return jsonify(products)

if __name__ == '__main__':
    app.run(port=8000)
