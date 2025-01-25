<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cemilunch</title>

    <style type="text/css">
        * {
            font-family: Verdana, Arial, sans-serif;
        }

        table {
            font-size: x-small;
        }

        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }

        .gray {
            background-color: lightgray
        }
    </style>

</head>

<body>
    <table width="100%">
        <tr>
            <td valign="top"><img
                    src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/assets/images/logo/logo-furniture.png'))) }}"
                    alt="" width="150" />
            </td>
            <td align="right">
                <h2>Cemilunch</h2>
                <pre>
                    Jalan DR. Soepomo No 8, RT.1/RW.2, Menteng Dalam
                    Kecamatan Tebet,Jakarta Selatan 12870
                    Email: cemilunch@gmail.com
                    Phone:  0896 1595 7535
            </pre>
            </td>
        </tr>

    </table>

    <table width="100%">
        <tr>
            <td><strong>From:</strong> Cemilunch</td>
            <td><strong>To:</strong> {{ $name }} - {{ $address }}, {{ $city }}</td>
        </tr>

    </table>

    <br />

    <table width="100%">
        <thead style="background-color: lightgray;">
            <tr>
                <th>#</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $key => $order)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $order->product_name }}</td>
                    <td align="right">{{ $order->quantity }}</td>
                    <td align="right">Rp {{ number_format($order->item_price, 0, '.', '.') }}</td>
                    <td align="right">Rp {{ number_format($order->item_price * $order->quantity, 0, '.', '.') }}</td>
                </tr>
            @endforeach
        </tbody>

        <tfoot>
            <tr>
                <td colspan="3"></td>
                <td align="right">Total </td>
                <td align="right" class="gray">Rp {{ number_format($total, 0, '.', '.') }}</td>
            </tr>
        </tfoot>
    </table>

</body>

</html>
