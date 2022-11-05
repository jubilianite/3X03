//pipeline {
//	agent any
//	stages {
//		stage('Checkout SCM') {
//			steps {
//				sh 'cd /home/3X03 && git status'
//			}
//		}
//
//		stage('OWASP DependencyCheck') {
//			steps {
//				dependencyCheck additionalArguments: '--format HTML --format XML', odcInstallation: 'Default'
//			}
//		}
//	}	
//	post {
//		success {
//			dependencyCheckPublisher pattern: 'dependency-check-report.xml'
//		}
//	}
//}

pipeline {
    agent {
        docker { image 'ubuntu:latest' }
    }
    stages {
        stage('Deploy') {
            steps {
                sh 'git clone https://github.com/ict3x03-ventura/ventura'
                sh 'pwd'
                sh 'ls -la'
                sh 'sudo ifconfig'
            }
        }
    }
}