<?php

namespace DockerPhpClient\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PluginConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\PluginConfig') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\PluginConfig) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \DockerPhpClient\Model\PluginConfig();
        if (property_exists($data, 'DockerVersion')) {
            $object->setDockerVersion($data->{'DockerVersion'});
        }
        if (property_exists($data, 'Description')) {
            $object->setDescription($data->{'Description'});
        }
        if (property_exists($data, 'Documentation')) {
            $object->setDocumentation($data->{'Documentation'});
        }
        if (property_exists($data, 'Interface')) {
            $object->setInterface($this->denormalizer->denormalize($data->{'Interface'}, 'DockerPhpClient\\Model\\PluginConfigInterface', 'json', $context));
        }
        if (property_exists($data, 'Entrypoint')) {
            $values = array();
            foreach ($data->{'Entrypoint'} as $value) {
                $values[] = $value;
            }
            $object->setEntrypoint($values);
        }
        if (property_exists($data, 'WorkDir')) {
            $object->setWorkDir($data->{'WorkDir'});
        }
        if (property_exists($data, 'User')) {
            $object->setUser($this->denormalizer->denormalize($data->{'User'}, 'DockerPhpClient\\Model\\PluginConfigUser', 'json', $context));
        }
        if (property_exists($data, 'Network')) {
            $object->setNetwork($this->denormalizer->denormalize($data->{'Network'}, 'DockerPhpClient\\Model\\PluginConfigNetwork', 'json', $context));
        }
        if (property_exists($data, 'Linux')) {
            $object->setLinux($this->denormalizer->denormalize($data->{'Linux'}, 'DockerPhpClient\\Model\\PluginConfigLinux', 'json', $context));
        }
        if (property_exists($data, 'PropagatedMount')) {
            $object->setPropagatedMount($data->{'PropagatedMount'});
        }
        if (property_exists($data, 'IpcHost')) {
            $object->setIpcHost($data->{'IpcHost'});
        }
        if (property_exists($data, 'PidHost')) {
            $object->setPidHost($data->{'PidHost'});
        }
        if (property_exists($data, 'Mounts')) {
            $values_1 = array();
            foreach ($data->{'Mounts'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'DockerPhpClient\\Model\\PluginMount', 'json', $context);
            }
            $object->setMounts($values_1);
        }
        if (property_exists($data, 'Env')) {
            $values_2 = array();
            foreach ($data->{'Env'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'DockerPhpClient\\Model\\PluginEnv', 'json', $context);
            }
            $object->setEnv($values_2);
        }
        if (property_exists($data, 'Args')) {
            $object->setArgs($this->denormalizer->denormalize($data->{'Args'}, 'DockerPhpClient\\Model\\PluginConfigArgs', 'json', $context));
        }
        if (property_exists($data, 'rootfs')) {
            $object->setRootfs($this->denormalizer->denormalize($data->{'rootfs'}, 'DockerPhpClient\\Model\\PluginConfigRootfs', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getDockerVersion()) {
            $data->{'DockerVersion'} = $object->getDockerVersion();
        }
        if (null !== $object->getDescription()) {
            $data->{'Description'} = $object->getDescription();
        }
        if (null !== $object->getDocumentation()) {
            $data->{'Documentation'} = $object->getDocumentation();
        }
        if (null !== $object->getInterface()) {
            $data->{'Interface'} = $this->normalizer->normalize($object->getInterface(), 'json', $context);
        }
        if (null !== $object->getEntrypoint()) {
            $values = array();
            foreach ($object->getEntrypoint() as $value) {
                $values[] = $value;
            }
            $data->{'Entrypoint'} = $values;
        }
        if (null !== $object->getWorkDir()) {
            $data->{'WorkDir'} = $object->getWorkDir();
        }
        if (null !== $object->getUser()) {
            $data->{'User'} = $this->normalizer->normalize($object->getUser(), 'json', $context);
        }
        if (null !== $object->getNetwork()) {
            $data->{'Network'} = $this->normalizer->normalize($object->getNetwork(), 'json', $context);
        }
        if (null !== $object->getLinux()) {
            $data->{'Linux'} = $this->normalizer->normalize($object->getLinux(), 'json', $context);
        }
        if (null !== $object->getPropagatedMount()) {
            $data->{'PropagatedMount'} = $object->getPropagatedMount();
        }
        if (null !== $object->getIpcHost()) {
            $data->{'IpcHost'} = $object->getIpcHost();
        }
        if (null !== $object->getPidHost()) {
            $data->{'PidHost'} = $object->getPidHost();
        }
        if (null !== $object->getMounts()) {
            $values_1 = array();
            foreach ($object->getMounts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'Mounts'} = $values_1;
        }
        if (null !== $object->getEnv()) {
            $values_2 = array();
            foreach ($object->getEnv() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'Env'} = $values_2;
        }
        if (null !== $object->getArgs()) {
            $data->{'Args'} = $this->normalizer->normalize($object->getArgs(), 'json', $context);
        }
        if (null !== $object->getRootfs()) {
            $data->{'rootfs'} = $this->normalizer->normalize($object->getRootfs(), 'json', $context);
        }
        return $data;
    }
}