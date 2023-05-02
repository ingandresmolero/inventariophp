$sql = "DELETE FROM usuarios WHERE id_usuario=$id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
