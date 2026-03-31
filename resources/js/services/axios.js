import axios from 'axios'

// Создаем экземпляр Axios с базовым URL
axios.create({
  baseURL: 'https://api.example.com/v1'
  // Здесь можно добавить headers, timeout и прочие настройки
})

export default axios