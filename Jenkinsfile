pipeline {
  agent {
    docker {
      image 'php:7.0'
      args '-u root:sudo'
    }

  }
  stages {
    stage('Build') {
      steps {
        sh '''apt-get update -q
apt-get install git -y
curl -sS https://getcomposer.org/installer | php
php composer.phar install
php artisan key:generate
php artisan serve'''
        echo 'Laravel development server started on http://localhost:8000/'
      }
    }

  }
}