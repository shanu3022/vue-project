@servers(['web' => 'vuejs'])

@task('admin-deploy', ['on' => 'web'])
    cd /var/www/vue-app
    git pull origin main
    npm install
    npm run build
@endtask
