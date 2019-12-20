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
apt-get autoremove graphviz -y
apt-get install graphviz -y'''
      }
    }

  }
}