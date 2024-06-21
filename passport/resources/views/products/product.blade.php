<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Products
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg p-5">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    <x-product-card
                        name="Apple iPhone"
                        description="The Apple iPhone is known for its sleek design, powerful performance, and cutting-edge technology. It features a high-resolution display, advanced camera systems, and a wide range of apps."
                        price="999"
                    />
                    <x-product-card
                        name="Samsung"
                        description="Samsung smartphones offer a variety of models with impressive displays, high-quality cameras, and long-lasting batteries. They are known for their innovative features and user-friendly interface."
                        price="899"
                    />
                    <x-product-card
                        name="Oppo"
                        description="Oppo smartphones are recognized for their stylish designs and excellent camera capabilities. They provide a range of options with great performance and value for money."
                        price="499"
                    />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
