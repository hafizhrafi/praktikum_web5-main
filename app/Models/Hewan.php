
class Hewan extends DatabaseConfig
{
    // ...

    // menampilkan semua data hewan dengan informasi jenis makanan
    public function findAllWithJenisMakanan()
    {
        $sql = "SELECT Hewan.*, JenisMakanan.nama AS jenis_makanan FROM Hewan
                JOIN JenisMakanan ON Hewan.jenis_makanan_id = JenisMakanan.id_jenis";
        $result = $this->conn->query($sql);
        $this->conn->close();
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    // ...
}
