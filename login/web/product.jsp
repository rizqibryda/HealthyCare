<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="java.util.ArrayList, models.Product" %>
<!DOCTYPE html>
<html>
<head>
    <title>${title}</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h3>${title}</h3>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <%
                ArrayList<Product> prods = (ArrayList<Product>) request.getAttribute("list");
                if (prods != null && !prods.isEmpty()) {
                    int i = 1;
                    for (Product p : prods) {
            %>
            <tr>
                <td><%= i++ %></td>
                <td><%= p.getName() %></td>
                <td><%= p.getPrice() %></td>
            </tr>
            <%
                    }
                } else {
            %>
            <tr>
                <td colspan="3">No products found.</td>
            </tr>
            <%
                }
            %>
        </tbody>
    </table>
</body>
</html>